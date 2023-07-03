

<table>
    <thead>
    <tr>
        <td>Test</td>
        <td>Result</td>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>Database connection</td>
        <td><?php
            if ($GLOBALS['con']->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            echo "Connected successfully";
            ?></td>
    </tr>
    </tbody>
</table>