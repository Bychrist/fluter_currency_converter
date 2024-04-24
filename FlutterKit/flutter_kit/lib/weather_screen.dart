import 'dart:ui';
import 'package:flutter/material.dart';
import 'package:flutter_kit/variables.dart';

class WeatherScreen extends StatelessWidget {
  const WeatherScreen({super.key});

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        title: const Text(
          'Weather App',
          style: TextStyle(
            fontWeight: FontWeight.bold,
            fontSize: 20.0,
          ),
        ),
        centerTitle: true,
        actions: [
          IconButton(
            onPressed: () {},
            icon: const Icon(Icons.refresh),
          )
        ],
      ),
      body: Padding(
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
                      child: const Padding(
                        padding: EdgeInsets.all(16.0),
                        child: Column(
                          children: [
                            Text(
                              '200.89° F',
                              style: TextStyle(
                                  fontSize: 32.0,
                                  fontWeight: FontWeight.bold,
                                  color: Colors.white),
                            ),
                            Icon(
                              Icons.cloud,
                              size: 64.0,
                              color: Colors.white,
                            ),
                            Text(
                              'Rain',
                              style: TextStyle(
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
                  'Weather Forecast',
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
                  weatherBox('37.81°F', '301.7'),
                  weatherBox('40.08°F', '222,7'),
                  weatherBox('45.41°F', '118.5'),
                  weatherBox('38.01°F', '145.08'),
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
                    '94'),
                humidityWindPressure(
                    'Wind',
                    const Icon(
                      Icons.air_sharp,
                      size: 32.0,
                      color: Colors.white,
                    ),
                    '7.46'),
                humidityWindPressure(
                    'Pressure',
                    const Icon(
                      Icons.beach_access_rounded,
                      size: 32.0,
                      color: Colors.white,
                    ),
                    '1006'),
              ],
            )
          ],
        ),
      ),
    );
  }
}
