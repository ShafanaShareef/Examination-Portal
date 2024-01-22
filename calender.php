<html>
  <head>
    ...
    <script type="text/javascript" src="prototype.js"></script>
    <script type="text/javascript" src="calendarview.js"></script>
    <script type="text/javascript">
      window.onload = function() {
        Calendar.setup({
          dateField     : 'date',
          parentElement : 'calendar'
        })
      }
    </script>
    ...
  </head>
  <body>
    ...
    <div id="calendar"></div>
    <div id="date">Select Date</div>
    ...
  </body></html> 