function myfunction() {
            var select = document.getElementById('trip_type');
            var value = select.options[select.selectedIndex].value;
            // console.log(value);
            var type = document.getElementById('optional-field');
            var css = document.getElementsByClassName('form-input');
            // console.log(css);
            if (value == 1) {
                type.style.display = 'flex';
                for (var i = 0; i < css.length; i++) {
                    css[i].style.width = '150px';
                }
            }
            if (value == 2) {
                type.style.display = 'none';
                for (var i = 0; i < css.length; i++) {
                    css[i].style.width = '190px';
                }
            }
        }

        function passengerAdd() {
            var pdetails = document.getElementById('pnum');
            var val = pnum.value;
            if (val < 6)
                val++;
            pdetails.value = val;
        }

        function passengerSub() {
            var pdetails = document.getElementById('pnum');
            var val = pnum.value;
            if (val > 0)
                val--;
            pdetails.value = val;
        }
        function showmore(){
            var button = document.getElementById('explore-btn');
            var div=document.getElementById('hide');
            div.style.display = 'flex';
            button.style.display='none'
            console.log("success")
        }