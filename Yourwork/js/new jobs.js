// _______To show the current date_______

var day_as_str = document.getElementById('day_as_str');
var date_as_int = document.getElementById('date_as_int');
var month_as_int = document.getElementById('month_as_int');
var year_as_int = document.getElementById('year_as_int');

var days = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'];

var d = new Date();

window.addEventListener('load', () => {

  var dayAsStr = days[d.getDay() - 1];
  var dateAsInt = d.getDate();
  var monthAsInt = d.getMonth() + 1;
  var yearAsInt = d.getFullYear();

  realDate();

  function realDate() {
    if (dateAsInt < 10) {
      dateAsInt = `0${dateAsInt}`;
    }
    else {
      dateAsInt = dateAsInt;
    }

    if (monthAsInt < 10) {
      monthAsInt = `0${monthAsInt}`;
    }
    else {
      monthAsInt = monthAsInt;
    }
  }

  day_as_str.textContent = dayAsStr;
  date_as_int.textContent = dateAsInt;
  month_as_int.textContent = monthAsInt
  year_as_int.textContent = yearAsInt;
})




var filter_btn = document.querySelectorAll('.filter_btn');
var status = false;


for (var i = 0; i < filter_btn.length; i++) {
  filter_btn[i].addEventListener('click', function() {
    if (!status) {
      this.style.background = '#179931';
      this.style.color = '#fff';
      status = true;
    }
    else {
      this.style.background = 'transparent';
      this.style.color = '#179931';
      status = false;
    }
  })
}
