<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>

<script>

    (function(document) {
        'use strict';

        var LightTableFilter = (function(Arr) {

            var _input;

            function _onInputEvent(e) {
                _input = e.target;
                var tables = document.getElementsByClassName(_input.getAttribute('data-table'));
                Arr.forEach.call(tables, function(table) {
                    Arr.forEach.call(table.tBodies, function(tbody) {
                        Arr.forEach.call(tbody.rows, _filter);
                    });
                });
            }

            function _filter(row) {
                var text = row.textContent.toLowerCase(), val = _input.value.toLowerCase();
                row.style.display = text.indexOf(val) === -1 ? 'none' : 'table-row';
            }

            return {
                init: function() {
                    var inputs = document.getElementsByClassName('light-table-filter');
                    Arr.forEach.call(inputs, function(input) {
                        input.oninput = _onInputEvent;
                    });
                }
            };
        })(Array.prototype);

        document.addEventListener('readystatechange', function() {
            if (document.readyState === 'complete') {
                LightTableFilter.init();
            }
        });

    })(document);
</script>

<input type="search" class="light-table-filter" data-table="order-table" placeholder="Filter">


<table class="order-table table" style="width:30%" id="table2">
    <h1>Eestlastest kuldmedalistid olümpiamängudelt</h1>
    <thead>
    <tr>
        <th>Aasta</th>
        <th>Koht</th>
        <th>Nimi</th>
        <th>Spordiala</th>
        <th>Tulemus</th>
    </tr>
    </thead>

    <tbody>
    <tr>
        <td>2008</td>
        <td>Peking</td>
        <td>Gerd Kanter</td>
        <td>Kettaheide</td>
        <td>68.82</td>
    </tr>
    <tr>
        <td>1980</td>
        <td>Moskva</td>
        <td>Jaak Uudmäe</td>
        <td>Kolmikhüpe</td>
        <td>17.35</td>
    </tr>

    <tr>
        <td>1972</td>
        <td>München</td>
        <td>Jüri Tarmak</td>
        <td>Kõrgushüpe</td>
        <td>2.23</td>
    </tr>

    <tr>
        <td>1964</td>
        <td>Innsbruck</td>
        <td>Ants Antson</td>
        <td>Kiiruisutamine</td>
        <td>2.10,3</td>
    </tr>
    </tbody>
</table>

</body>
</html>