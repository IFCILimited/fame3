<script>
        function GetCityByPinCode(name, pincode, count) {
            var state = '#' + name + 'AddState';
            var district = '#' + name + 'AddDistrict';
            var pincodeMsg = '#' + name + 'pincodeMsg';

            if (pincode.length != 6) {

                $(pincodeMsg + count).text('Pincode may not less/greater than 6 digits');
                $(pincodeMsg + count).show();
                $(state + count).val('');
                $(city + count).val('');
                $(district + count).val('');
            }
            if (pincode.length == 6 && $.isNumeric(pincode)) {
                $.ajax({
                    url: '/pincode/' + pincode,
                    type: "GET",
                    dataType: "json",
                    success: function(data) {
                        if (data.state.length == 0) {
                            $(pincodeMsg + count).text('Pincode not found');
                            $(pincodeMsg + count).show();

                        } else {
                             $(pincodeMsg + count).hide();
                            $(state + count).val(data.state)
                            $(district + count).val(data.district);

                        }

                    }
                });
            };
        }
</script>
