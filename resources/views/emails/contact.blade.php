<html>
<head>
    <style>
        .container {
            padding: 10px;
        }

        #contact {
            border-collapse: collapse;
            width: 100%;
        }

        #contact td,
        #contact th {
            border: 1px solid #ddd;
            padding: 8px;
            width: 30%;
        }

        #contact th {
            width: 10%;
        }

        #contact tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        #contact tr:hover {
            background-color: #ddd;
        }

        #contact th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #8062c7;
            color: white;
        }
        .heading {
            background-color: green;
            color:white;
            padding: 10px;
            text-align:center;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="heading">
            <h3>Greenland Law Firm: You have a new enquiry !!</h3>
        </div>
        <table id="contact">
            <tr>
                <th>Full Name</th>
                <td>{{ $contact_data['name'] }}</td>
            </tr>
            <tr>
                <th>Phone Number</th>
                <td>{{ $contact_data['phone'] }}</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>{{ $contact_data['email'] }}</td>
            </tr>

            <tr>
                <th>Message</th>
                <td>{{ $contact_data['message'] }}</td>
            </tr>
        </table>
    </div>
</body>

</html>
