<script>
document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');
    var initialLocaleCode = 'pt-br';
    var calendar = new FullCalendar.Calendar(calendarEl, {
      
     // initialDate: '2020-09-12',
      locale: initialLocaleCode,
     // navLinks: true, // can click day/week names to navigate views
      businessHours: true, // display business hours
      editable: true,
      selectable: true,
      select: 
      function(arg){ 

         // $("#disponibilidadeDoDia").show();
          //alert(arg.start);

          var dataa = arg.start.toUTCString();

          alert(dataa); 
          
          //dataDinamica(dataa);
          //dataDinamica2(dataa);

          //alert(arg.end); 
          // var selDate = new Date(start);
          // add your function
    },
      events: [

        // red areas where no events can be dropped

        <?php 
          // $query3 = "SELECT DISTINCT  data FROM disponibilidades";
          // $result3 = mysqli_query($mysql_conn, $query3);
          
          // while($row3 = mysqli_fetch_assoc($result3)){

          
        ?>

        {
          start: '2010-10-10',
          overlap: false,
          display: 'background',
          color: 'green',
        },

        <?php //}?>

      ]
    });

    calendar.render();
  });
</script>