{{$message}}
<script>

    $(document).ready(function(){


        var currency = '';
        var rate = 0;
        var currencyRateUrl = 'http://data.fixer.io/api/latest?access_key=66b04421a8487a0bc2ec99f8f5e0e031&base=EUR&symbols='
        /*====================== function  ajax to get country code=======================*/
             function fetchData(country) {
            // Create a new XMLHttpRequest object
            console.log(country)
            var xhr = new XMLHttpRequest();

            // Define the API endpoint
            var url = `https://restcountries.com/v2/name/${country}`;
            // Configure the request
            xhr.open('GET', url, true);
            // Set up a callback function to handle the response
            xhr.onreadystatechange = function() {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    // Parse the JSON response
                    var response = JSON.parse(xhr.responseText);

                    // Log the response to the console (you can do something else with it)
                    currency = response[0].currencies[0].code
                    fetchRate(currency)

                }
            };

            // Send the request
            xhr.send();
        }
        /*============================= /function  ajax to get country code ==================*/

        /* ==============   get currency rate of  currency code */
        function fetchRate(code) {
            // Create a new XMLHttpRequest object
            console.log(code)
            var xhr = new XMLHttpRequest();

            // Define the API endpoint
            var url = `${currencyRateUrl}${code}`;

            console.log(url)
            // Configure the request
            xhr.open('GET', url, true);
            // Set up a callback function to handle the response
            xhr.onreadystatechange = function() {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    // Parse the JSON response
                    var response = JSON.parse(xhr.responseText);
                    // Log the response to the console (you can do something else with it)
                     var apiRate = response.rates[code];
                     var amountSaleText = $('#saleamount').text().replaceAll(',', '')

                    //=================== maths dynamics
                    var costPurchase = apiRate * amountSaleText
                    $('#saleamount').text(costPurchase.toFixed(2))




                }
            };

            // Send the request
            xhr.send();
        }
        /* ==============   /get currency rate of  currency code */

        $('#country').change(function(e){

            var country = $(this).val();
            var splitResult = country.split('/');

            if(country.trim().length !== 0)
            {

                    if(splitResult[0] == 'Africa')
                    {
                        $('#africa').show()
                        $('#nigeria').hide()
                        $('#other').hide()

                    }
                    else if(splitResult[0] == 'Nigeria')
                    {
                        $('#nigeria').show()
                        $('#other').hide()
                        $('#africa').hide()
                    }
                    else {
                        $('#other').show()
                        $('#africa').hide()
                        $('#nigeria').hide()
                    }


                        fetchData(splitResult[1]);



            }
            else
            {
                $('#other').hide()
                $('#africa').hide()
                $('#nigeria').hide()
            }



        })






    })
</script>
