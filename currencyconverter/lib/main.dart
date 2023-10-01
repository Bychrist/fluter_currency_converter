import 'package:flutter/material.dart';
import 'material_converter_currency.dart';

void main() {
  runApp(const MyApp());
}

//9:08:28 / 20:47:34
class MyApp extends StatelessWidget {
  // ignore: use_key_in_widget_constructors
  const MyApp({Key? key}) : super(key: key);
  @override
  Widget build(BuildContext context) {
    return const MaterialApp(
      debugShowCheckedModeBanner: false,
      home: CurrencyConverterMaterialPage(),
    );
  }
}
