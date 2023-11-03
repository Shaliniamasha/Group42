<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GIVE4GOOD</title>
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        :root {
  --white: #fff;
  --darkblue: #1b4965;
  --lightblue: #edf2f4;
}

* {
  padding: 0;
  margin: 0;
}

body {
  margin: 50px 0 150px;
  font-family: "Noto Sans", sans-serif;
}

.container {
  max-width: 1000px;
  padding: 0 15px;
  margin: 0 auto;
}

h1 {
  font-size: 1.5em;
}

/* TABLE STYLES
–––––––––––––––––––––––––––––––––––––––––––––––––– */
.table-wrapper {
  overflow-x: auto;
}

.table-wrapper::-webkit-scrollbar {
  height: 8px;
}

.table-wrapper::-webkit-scrollbar-thumb {
  background: var(--darkblue);
  border-radius: 40px;
}

.table-wrapper::::-webkit-scrollbar-track {
  background: var(--white);
  border-radius: 40px;
}

.table-wrapper table {
  margin: 50px 0 20px;
  border-collapse: collapse;
  text-align: center;
}

.table-wrapper table th,
.table-wrapper table td {
  padding: 10px;
  min-width: 75px;
}

.table-wrapper table th {
  color: var(--white);
  background: var(--darkblue);
}

.table-wrapper table tbody tr:nth-of-type(even) > * {
  background: var(--lightblue);
}

.table-wrapper table td:first-child {
  display: grid;
  grid-template-columns: 25px 1fr;
  grid-gap: 10px;
  text-align: left;
}

.table-credits {
  font-size: 12px;
  margin-top: 10px;
}

/* FOOTER STYLES
–––––––––––––––––––––––––––––––––––––––––––––––––– */
.page-footer {
  position: fixed;
  right: 0;
  bottom: 50px;
  display: flex;
  align-items: center;
  padding: 5px;
  z-index: 1;
  background: var(--white);
}

.page-footer a {
  display: flex;
  margin-left: 4px;
}


    </style>

</head>
<body>
    <div class="container">
        <h1>Fundraisers (Pending)</h1>
        <div class="table-wrapper">
        <table>
        <thead>
        <tr>
            <th>View ID</th>
            <th>Donee ID</th>
            <th>Title</th>
            <th>Category</th>
            <th>Story</th>
            <th>Story Images</th>
            <th>Required Amount</th>
            <th>Created Date</th>
            <th>Modified Date</th>
            <th>Requirement End Date</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td>1</td>
            <td>Fundraisers</td>
            <td>Category Value</td>
            <td>Sport</td>
            <td>1.jpg</td>
            <td>10,000</td>
            <td>2023/10/28</td>
            <td></td>
            <td>2023/11/30</td>
        </tr>
    </table>
</body>
</html>
