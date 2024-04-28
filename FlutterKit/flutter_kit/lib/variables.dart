import 'dart:convert';
import 'dart:ui';

import 'package:flutter/material.dart';
import 'package:http/http.dart' as http;

const String apiKey = '77ea932bda6f72090d2504885334b7e0';
dynamic data = "";
var children = <Widget>[];

class WeatherScreenState extends StatefulWidget {
  const WeatherScreenState({super.key});

  @override
  State<WeatherScreenState> createState() => _WeatherScreenStateState();
}

class _WeatherScreenStateState extends State<WeatherScreenState> {
  double temp = 0;
  String skyDescription = '';
  bool loading = true;
  @override
  void initState() {
    super.initState();
    getCurrentWeather();
  }

  Future getCurrentWeather() async {
    try {
      String cityName = 'Dubai';
      final res = await http.get(
        Uri.parse(
            'https://api.openweathermap.org/data/2.5/forecast?q=$cityName&APPID=$apiKey'),
      );

      data = json.decode(res.body);
      if (int.parse(data['cod'].toString()) != 200) {
        setState(() {
          loading = false;
        });
        throw 'An unexpected error occured';
      }

      setState(() {
        loading = false;
        temp = data['list'][0]['main']['temp'];
        skyDescription = data['list'][1]['weather'][0]['main'];
      });
    } catch (e) {
      loading = false;
      throw e.toString();
    }
  }

  @override
  Widget build(BuildContext context) {
    return loading
        ? const LinearProgressIndicator()
        : Padding(
            padding: const EdgeInsets.all(16.0),
            child: Column(
              children: [
                SizedBox(
                  width: double.infinity,
                  child: Card(
                      elevation: 10,
                      shape: const RoundedRectangleBorder(
                        borderRadius: BorderRadius.all(Radius.circular(20.0)),
                      ),
                      child: ClipRRect(
                        borderRadius: BorderRadius.circular(16),
                        child: BackdropFilter(
                          filter: ImageFilter.blur(
                            sigmaX: 5,
                            sigmaY: 5,
                          ),
                          child: Padding(
                            padding: const EdgeInsets.all(16.0),
                            child: Column(
                              children: [
                                Text(
                                  '$temp k',
                                  style: const TextStyle(
                                      fontSize: 32.0,
                                      fontWeight: FontWeight.bold,
                                      color: Colors.white),
                                ),
                                Icon(
                                  skyDescription == 'Clouds' ||
                                          skyDescription == 'Rain'
                                      ? Icons.cloud
                                      : Icons.sunny,
                                  size: 64.0,
                                  color: Colors.white,
                                ),
                                Text(
                                  skyDescription,
                                  style: const TextStyle(
                                    fontSize: 20.0,
                                  ),
                                )
                              ],
                            ),
                          ),
                        ),
                      )),
                ),
                const SizedBox(
                  height: 20.0,
                ),
                const Align(
                  alignment: Alignment.bottomLeft,
                  child: Padding(
                    padding: EdgeInsets.only(left: 10.0),
                    child: Text(
                      'Hourly Forecast',
                      style: TextStyle(
                        fontSize: 20.0,
                        color: Colors.white,
                        fontWeight: FontWeight.bold,
                      ),
                    ),
                  ),
                ),
                SingleChildScrollView(
                  scrollDirection: Axis.horizontal,
                  child: Row(
                    children: [
                      for (int i = 1; i <= 5; i++)
                        weatherBox(
                            data['list'][i]['dt_txt'].toString(),
                            data['list'][i]['main']['temp'].toString(),
                            data['list'][i]['weather'][0]['main']),
                    ],
                  ),
                ),
                const SizedBox(
                  height: 20.0,
                ),
                const Align(
                  alignment: Alignment.bottomLeft,
                  child: Padding(
                    padding: EdgeInsets.only(left: 10.0),
                    child: Text(
                      'Additional Information',
                      style: TextStyle(
                        fontSize: 20.0,
                        color: Colors.white,
                        fontWeight: FontWeight.bold,
                      ),
                    ),
                  ),
                ),
                const SizedBox(
                  height: 5.0,
                ),
                Row(
                  mainAxisAlignment: MainAxisAlignment.spaceEvenly,
                  children: [
                    humidityWindPressure(
                        'Humidity',
                        const Icon(
                          Icons.water_drop,
                          size: 32.0,
                          color: Colors.white,
                        ),
                        data['list'][0]['main']['humidity'].toString()),
                    humidityWindPressure(
                        'Wind',
                        const Icon(
                          Icons.air_sharp,
                          size: 32.0,
                          color: Colors.white,
                        ),
                        data['list'][0]['wind']['speed'].toString()),
                    humidityWindPressure(
                        'Pressure',
                        const Icon(
                          Icons.beach_access_rounded,
                          size: 32.0,
                          color: Colors.white,
                        ),
                        data['list'][0]['main']['pressure'].toString()),
                  ],
                )
              ],
            ),
          );
  }
}

Widget weatherBox(String text, String degree, String cloud) {
  return SizedBox(
    width: 100,
    child: Card(
      elevation: 6,
      shape: const RoundedRectangleBorder(
          borderRadius: BorderRadius.all(Radius.circular(10))),
      child: Padding(
        padding: const EdgeInsets.all(8.0),
        child: Column(
          children: [
            Text(
              text,
              style: const TextStyle(
                color: Colors.white,
                fontSize: 16.0,
                fontWeight: FontWeight.bold,
              ),
            ),
            const SizedBox(
              height: 8,
            ),
            Icon(
              cloud == 'Clouds' || cloud == 'Rain' ? Icons.cloud : Icons.sunny,
              size: 25.0,
              color: Colors.white,
            ),
            Text(
              degree,
              style: const TextStyle(
                fontSize: 15,
                color: Colors.white,
              ),
            )
          ],
        ),
      ),
    ),
  );
}

Widget humidityWindPressure(String name, Widget icon, String degree) {
  return Column(
    crossAxisAlignment: CrossAxisAlignment.center,
    children: [
      icon,
      const SizedBox(
        height: 10.0,
      ),
      Text(
        name,
        style: const TextStyle(
          color: Colors.white,
        ),
      ),
      const SizedBox(
        height: 5.0,
      ),
      Text(
        degree,
        style: const TextStyle(
          color: Colors.white,
        ),
      ),
    ],
  );
}
