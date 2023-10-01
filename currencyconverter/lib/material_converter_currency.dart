import 'package:flutter/material.dart';

class CurrencyConverterMaterialPage extends StatefulWidget {
  const CurrencyConverterMaterialPage({Key? key}) : super(key: key);
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
    const border = OutlineInputBorder(
      borderSide: BorderSide(
        color: Colors.red,
        width: 2.0,
        style: BorderStyle.solid,
      ),
      borderRadius: BorderRadius.all(Radius.circular(40)),
    );

    return Scaffold(
      backgroundColor: const Color.fromRGBO(131, 129, 130, 0.52),
      appBar: AppBar(
        backgroundColor: Colors.grey[400],
        elevation: 0,
        title: const Text(
          'Currency Converter',
        ),
        centerTitle: true,
      ),
      body: Center(
        child: Column(
          mainAxisAlignment: MainAxisAlignment.center,
          children: [
            Container(
              padding: const EdgeInsets.all(10),
              margin: const EdgeInsets.all(10),
              child: Text(result.toString(),
                  style: const TextStyle(
                      fontSize: 45,
                      fontWeight: FontWeight.bold,
                      color: Colors.white)),
            ),
            Container(
              padding: const EdgeInsets.all(8.0),
              child: TextField(
                controller: textEditingController,
                style: const TextStyle(
                  color: Colors.black,
                ),
                decoration: const InputDecoration(
                  hintText: 'Please enter amount in USD',
                  hintStyle: TextStyle(
                    color: Colors.black,
                    fontSize: 12,
                  ),
                  prefixIcon: Icon(
                    Icons.monetization_on_outlined,
                    color: Colors.black,
                  ),
                  filled: true,
                  fillColor: Colors.white,
                  focusedBorder: border,
                  enabledBorder: border,
                ),
                keyboardType: const TextInputType.numberWithOptions(
                  decimal: true,
                ),
              ),
            ),
            Padding(
              padding: const EdgeInsets.all(10.0),
              child: TextButton(
                onPressed: () {
                  // ignore: avoid_print

                  setState(() {
                    result = double.parse(
                        (double.parse(textEditingController.text) * 81)
                            .toStringAsFixed(2));
                  });
                },
                style: TextButton.styleFrom(
                  backgroundColor: Colors.black,
                  minimumSize: const Size(double.infinity, 50),
                ),
                child: const Text(
                  'Convert Me',
                  style: TextStyle(color: Colors.white),
                ),
              ),
            ),
          ],
        ),
      ),
    );
  }
}

// class CurrencyConverterMaterialPagee extends StatelessWidget {
//   const CurrencyConverterMaterialPagee({Key? key}) : super(key: key);

//   @override
// }
