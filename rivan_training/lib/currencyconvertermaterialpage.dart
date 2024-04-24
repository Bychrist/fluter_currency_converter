import 'package:flutter/material.dart';

class CurrencyConverterMaterialPage extends StatefulWidget {
  CurrencyConverterMaterialPage({super.key});

  @override
  State<CurrencyConverterMaterialPage> createState() =>
      _CurrencyConverterMaterialPageState();
}

class _CurrencyConverterMaterialPageState
    extends State<CurrencyConverterMaterialPage> {
  double result = 0;
  final TextEditingController textEditingController = TextEditingController();

  @override
  Widget build(BuildContext context) {
    final border = OutlineInputBorder(
        borderSide: BorderSide(
          color: Colors.red,
          width: 2.0,
        ),
        borderRadius: BorderRadius.all(
          Radius.circular(60),
        ));

    return Scaffold(
        backgroundColor: Colors.grey,
        appBar: AppBar(
          backgroundColor: Colors.grey,
          title: Text(
            'Currency Converter',
            style: TextStyle(color: Colors.white),
          ),
          centerTitle: true,
        ),
        body: Center(
          child: Column(
            mainAxisAlignment: MainAxisAlignment.center,
            children: [
              Text(
                result.toString(),
                style: TextStyle(
                  fontSize: 45.0,
                  fontWeight: FontWeight.bold,
                  color: Colors.white,
                ),
              ),
              SizedBox(
                height: 30.0,
              ),
              Padding(
                padding: const EdgeInsets.all(8.0),
                child: TextField(
                  controller: textEditingController,
                  style: TextStyle(
                    color: Colors.black87,
                  ),
                  decoration: InputDecoration(
                    border: OutlineInputBorder(
                      borderRadius: BorderRadius.circular(30),
                    ),
                    label: Text(
                      'Amount',
                      style: TextStyle(fontSize: 10.0),
                    ),
                    hintText: "Enter amount in USD",
                    hintStyle: TextStyle(
                      fontSize: 10.0,
                    ),
                    prefixIcon: Icon(
                      Icons.monetization_on,
                    ),
                    filled: true,
                    fillColor: Colors.white,
                    focusedBorder: border,
                  ),
                  keyboardType: TextInputType.numberWithOptions(
                    decimal: true,
                  ),
                ),
              ),
              TextButton(
                onPressed: () {
                  setState(() {
                    result = double.parse(textEditingController.text) * 81;
                  });
                  print(result);
                },
                style: TextButton.styleFrom(
                  backgroundColor: Colors.black,
                  foregroundColor: Colors.white,
                  textStyle: TextStyle(color: Colors.white),
                ),
                child: Text('Convert'),
              )
            ],
          ),
        ));
  }
}
