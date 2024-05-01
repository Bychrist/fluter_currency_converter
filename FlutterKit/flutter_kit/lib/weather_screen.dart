import 'dart:ui';
import 'package:flutter/material.dart';
import 'package:flutter_kit/variables.dart';

class WeatherScreen extends StatefulWidget {
  const WeatherScreen({super.key});

  @override
  State<WeatherScreen> createState() => _WeatherScreenState();
}

class _WeatherScreenState extends State<WeatherScreen> {
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
              onPressed: () {
                setState(() {
                  const WeatherScreenState();
                  print('new state called');
                });
              },
              icon: const Icon(Icons.refresh),
            )
          ],
        ),
        body: const WeatherScreenState());
  }
}
