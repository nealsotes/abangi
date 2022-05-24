import 'package:flutter/material.dart';
import 'package:abangi/components/signup.dart';
import 'login.dart';

void main() => runApp(const Welcome());

class Welcome extends StatelessWidget {
  const Welcome({Key? key}) : super(key: key);

  @override
  Widget build(BuildContext context) {
    return MaterialApp(
      debugShowCheckedModeBanner: false,
      home: Scaffold(
        body: const MyStatefulWidget(),
      ),
      theme: new ThemeData(
          scaffoldBackgroundColor: Color.fromARGB(255, 255, 255, 255),
          fontFamily: 'Poppins'),
    );
  }
}

class MyStatefulWidget extends StatefulWidget {
  const MyStatefulWidget({Key? key}) : super(key: key);

  @override
  State<MyStatefulWidget> createState() => _MyStatefulWidgetState();
}

class _MyStatefulWidgetState extends State<MyStatefulWidget> {
  @override
  Widget build(BuildContext context) {
    return Padding(
        padding: const EdgeInsets.all(10),
        child: ListView(
          children: <Widget>[
            Container(
                alignment: Alignment.center,
                padding: const EdgeInsets.all(10),
                margin: const EdgeInsets.only(top: 35),
                child: const Text(
                  'ABANGI',
                  style: TextStyle(
                      color: Colors.blue,
                      fontWeight: FontWeight.w600,
                      fontSize: 35),
                )),
            Image.asset(
              'assets/images/welcome-banner.png',
              height: 100,
            ),
            // ignore: avoid_unnecessary_containers
            Container(
              padding: const EdgeInsets.all(12),
              margin: const EdgeInsets.only(top: 20),
              child: Column(
                children: [
                  Text(
                    'Pay Online Conveniently',
                    style: TextStyle(fontWeight: FontWeight.w600, fontSize: 19),
                  ),
                  Container(
                    margin: const EdgeInsets.only(top: 10),
                  ),
                  Text(
                      'Secure and pay your renting transactions online to skip the hassle.',
                      style: TextStyle(color: Colors.grey),
                      textAlign: TextAlign.center)
                ],
              ),
            ),
            Container(
              alignment: Alignment.center,
              padding: const EdgeInsets.all(10),
            ),
            Container(
                height: 50,
                margin: const EdgeInsets.only(top: 15),
                padding: const EdgeInsets.fromLTRB(10, 0, 10, 0),
                child: ElevatedButton(
                  child: const Text('Login'),
                  onPressed: () {
                    Navigator.push(
                      context,
                      MaterialPageRoute(builder: (context) => const Login()),
                    );
                  },
                )),
            Container(
                height: 50,
                margin: const EdgeInsets.only(top: 15),
                padding: const EdgeInsets.fromLTRB(10, 0, 10, 0),
                child: OutlinedButton(
                  child: const Text('Sign Up'),
                  onPressed: () {
                    Navigator.push(
                      context,
                      MaterialPageRoute(builder: (context) => const SignUp()),
                    );
                  },
                )),
            Row(
              children: <Widget>[
                Container(
                  margin: const EdgeInsets.only(top: 30),
                  child: Row(
                    children: [
                      TextButton(
                        child: const Text(
                          'Continue as Guest',
                          style: TextStyle(fontSize: 15),
                        ),
                        onPressed: () {
                          //guest screen
                        },
                      ),
                    ],
                  ),
                ),
              ],
              mainAxisAlignment: MainAxisAlignment.center,
            ),
          ],
        ));
  }
}
