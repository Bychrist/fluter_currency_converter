import "dart:convert";
import "package:http/http.dart";
import "package:intl/intl.dart";

class WorldTime {
  String location;
  String? time; // time in the location
  String flag;
  String url;
  bool isDayTime = false;

  WorldTime({required this.location, required this.flag, required this.url});

  Future<void> getTime() async {
    try {
      Response response = await get(
          Uri.parse('http://worldtimeapi.org/api/timezone/${this.url}'));
      Map data = jsonDecode(response.body);
      String datetime = data['datetime'];
      String offset = data['utc_offset'];
      offset = offset.substring(1, 3);

      DateTime now = DateTime.parse(datetime);
      now = now.add(Duration(hours: int.parse(offset)));

      //set the time property 6

      this.isDayTime = now.hour > 6 && now.hour < 19 ? true : false;
      this.time = DateFormat.jm().format(now);
    } catch (e) {
      this.time = 'Could not get time data';
    }
    //make the http request
  }
}
