<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabellen</title>
    <style>
        table,
        th,
        td {
            border: 1px solid black;
        }

        .table1 {

            width: 95%;
            background-color: lightgoldenrodyellow;
            color: lightpink;
            font-family: 'Times New Roman', Times, serif;
        }

        .country {
            width: 80px;
            height: 90px;
        }

        .table2 {
            border: 1px solid black;
            width: 100%;
            color: darkcyan;
            border-collapse: collapse;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        }

        .table3 {
            border-collapse: collapse;
            width: 75%;
            background-color: lavender;
            color: midnightblue;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        }
    </style>
</head>

<body>
    <table class="table1">
        <tr>
            <th>Favoriete Muziek</th>
            <th>Favoriete Eten</th>
            <th>Favoriete Drinken</th>
        </tr>
        <tr>
            <td>Country Music <img class="country" src="country.jpg"></td>
            <td>Sushi</td>
            <td>Ice Tea Peach</td>
        </tr>
        <tr>
            <td>2000s Pop</td>
            <td>Koreaans</td>
            <td>Cola Cherry</td>
        </tr>
    </table>
    <br>
    <br>
    <table class="table2">
        <colgroup>
            <col span="2" style="background-color: #D6EEEE">
        </colgroup>
        <tr>
            <th>MON</th>
            <th>TUE</th>
            <th>WED</th>
            <th>THU</th>
            <th>FRI</th>
            <th>SAT</th>
            <th>SUN</th>
        </tr>
        <tr>
            <td>1</td>
            <td>2</td>
            <td>3</td>
            <td>4</td>
            <td><a href="">welcome to tables</a>5</td>
            <td>6</td>
        </tr>
        <tr>
            <td>8</td>
            <td>9</td>
            <td>10</td>
            <td>11</td>
            <td>12</td>
            <td>13</td>
            <td>14</td>
        </tr>
        <tr>
            <td>15</td>
            <td>16</td>
            <td>17</td>
            <td>18</td>
            <td>19</td>
            <td>20</td>
            <td>21</td>
        </tr>
        <tr>
            <td>22</td>
            <td>23</td>
            <td>24</td>
            <td>25</td>
            <td>26</td>
            <td>27</td>
            <td>28</td>
        </tr>
    </table>
    <br>
    <br>

    <table class="table3">
        <tr>
            <th>Name</th>
            <td>Jill</td>
        </tr>
        <tr>
            <th rowspan="2">Phone</th>
            <td>555-1234</td>
        </tr>
        <tr>
            <td>555-8745</td>
        </tr>
    </table>
</body>

</html>