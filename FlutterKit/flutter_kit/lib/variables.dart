import 'package:flutter/material.dart';

Widget weatherBox(String text, String degree) {
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
            const Icon(
              Icons.cloud,
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
