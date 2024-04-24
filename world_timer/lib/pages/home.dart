import "package:flutter/material.dart";
import "package:world_timer/pages/choose_location.dart";

class Home extends StatefulWidget {
  const Home({super.key});

  @override
  State<Home> createState() => _HomeState();
}

class _HomeState extends State<Home> {
  dynamic returnData = {
    'location': 'loading',
    'flag': 'loading',
    'time': 'loading',
    'isDayTime': false
  };

  @override
  Widget build(BuildContext context) {
    // Get the current route from the context
    ModalRoute? route = ModalRoute.of(context);

// Check if the route is not null and if it has settings
    if (route != null && route.settings.arguments != null) {
      // Access the route arguments
      var data = route.settings.arguments;

      returnData = returnData['location'] == 'loading' ? data : returnData;

      print(returnData);
      // Now you can use the arguments as needed
    } else {}

    //define the image
    String bgImage = returnData['isDayTime'] ? 'day.png' : 'night.png';
    var bgColor = returnData['isDayTime'] ? Colors.blue : Colors.indigo[700];

    return Scaffold(
      backgroundColor: bgColor,
      body: SafeArea(
        child: Container(
          decoration: BoxDecoration(
              image: DecorationImage(
            image: AssetImage('assets/$bgImage'),
            fit: BoxFit.cover,
          )),
          child: Column(
            children: [
              SizedBox(
                height: 50.0,
              ),
              OutlinedButton.icon(
                onPressed: () async {
                  // dynamic result =
                  //     await Navigator.pushNamed(context, '/location');

                  dynamic result = await Navigator.push(
                    context,
                    MaterialPageRoute(
                      builder: (context) => ChooseLocation(),
                    ),
                  );

                  setState(() {
                    returnData = {
                      'location': result['location'],
                      'flag': result['flag'],
                      'time': result['time'],
                      'isDayTime': result['isDayTime'],
                    };

                    print(returnData['location']);
                  });
                },
                icon: Icon(Icons.edit_location),
                label: Text(
                  'Edit Location',
                  style: TextStyle(color: Colors.white),
                ),
              ),
              SizedBox(
                height: 20.0,
              ),
              Row(
                mainAxisAlignment: MainAxisAlignment.center,
                children: [
                  Text(
                    returnData['location'],
                    style: TextStyle(
                      fontSize: 28.0,
                      fontWeight: FontWeight.w400,
                      color: Colors.white,
                      letterSpacing: 2.0,
                    ),
                  )
                ],
              ),
              SizedBox(
                height: 20.0,
              ),
              Text(
                returnData['time'],
                style: TextStyle(
                    fontSize: 66.0,
                    color: Colors.white,
                    fontWeight: FontWeight.w900),
              )
            ],
          ),
        ),
      ),
    );
  }
}
