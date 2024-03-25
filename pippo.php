<?php
session_start();

if (!isset($_SESSION['orderData'])) {
    header("Location: ordinazione.php");
    exit();
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aereiDB";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connessione al database fallita: " . $e->getMessage();
    die();
}

// Verifica se è stato inviato un termine di ricerca
if (isset($_POST['search'])) {
    $searchTerm = $_POST['search'];

    // Query per recuperare i dati degli aerei con il termine di ricerca
    $stmt = $conn->prepare("SELECT * FROM aerei WHERE Marca LIKE :searchTerm OR Modello LIKE :searchTerm");
    $stmt->bindValue(':searchTerm', '%' . $searchTerm . '%', PDO::PARAM_STR);
    $stmt->execute();
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
} else {
    // Se il termine di ricerca non è stato specificato, mostra tutti gli aerei
    $stmt = $conn->query("SELECT * FROM aerei");
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?><?php
session_start();

if (!isset($_SESSION['orderData'])) {
    header("Location: ordinazione.php");
    exit();
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aereiDB";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connessione al database fallita: " . $e->getMessage();
    die();
}

// Verifica se è stato inviato un termine di ricerca
if (isset($_POST['search'])) {
    $searchTerm = $_POST['search'];

    // Query per recuperare i dati degli aerei con il termine di ricerca
    $stmt = $conn->prepare("SELECT * FROM aerei WHERE Marca LIKE :searchTerm OR Modello LIKE :searchTerm");
    $stmt->bindValue(':searchTerm', '%' . $searchTerm . '%', PDO::PARAM_STR);
    $stmt->execute();
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
} else {
    // Se il termine di ricerca non è stato specificato, mostra tutti gli aerei
    $stmt = $conn->query("SELECT * FROM aerei");
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?><?php
session_start();

if (!isset($_SESSION['orderData'])) {
    header("Location: ordinazione.php");
    exit();
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aereiDB";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connessione al database fallita: " . $e->getMessage();
    die();
}

// Verifica se è stato inviato un termine di ricerca
if (isset($_POST['search'])) {
    $searchTerm = $_POST['search'];

    // Query per recuperare i dati degli aerei con il termine di ricerca
    $stmt = $conn->prepare("SELECT * FROM aerei WHERE Marca LIKE :searchTerm OR Modello LIKE :searchTerm");
    $stmt->bindValue(':searchTerm', '%' . $searchTerm . '%', PDO::PARAM_STR);
    $stmt->execute();
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
} else {
    // Se il termine di ricerca non è stato specificato, mostra tutti gli aerei
    $stmt = $conn->query("SELECT * FROM aerei");
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?><?php
session_start();

if (!isset($_SESSION['orderData'])) {
    header("Location: ordinazione.php");
    exit();
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aereiDB";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connessione al database fallita: " . $e->getMessage();
    die();
}

// Verifica se è stato inviato un termine di ricerca
if (isset($_POST['search'])) {
    $searchTerm = $_POST['search'];

    // Query per recuperare i dati degli aerei con il termine di ricerca
    $stmt = $conn->prepare("SELECT * FROM aerei WHERE Marca LIKE :searchTerm OR Modello LIKE :searchTerm");
    $stmt->bindValue(':searchTerm', '%' . $searchTerm . '%', PDO::PARAM_STR);
    $stmt->execute();
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
} else {
    // Se il termine di ricerca non è stato specificato, mostra tutti gli aerei
    $stmt = $conn->query("SELECT * FROM aerei");
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?><?php
session_start();

if (!isset($_SESSION['orderData'])) {
    header("Location: ordinazione.php");
    exit();
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aereiDB";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connessione al database fallita: " . $e->getMessage();
    die();
}

// Verifica se è stato inviato un termine di ricerca
if (isset($_POST['search'])) {
    $searchTerm = $_POST['search'];

    // Query per recuperare i dati degli aerei con il termine di ricerca
    $stmt = $conn->prepare("SELECT * FROM aerei WHERE Marca LIKE :searchTerm OR Modello LIKE :searchTerm");
    $stmt->bindValue(':searchTerm', '%' . $searchTerm . '%', PDO::PARAM_STR);
    $stmt->execute();
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
} else {
    // Se il termine di ricerca non è stato specificato, mostra tutti gli aerei
    $stmt = $conn->query("SELECT * FROM aerei");
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?><?php
session_start();

if (!isset($_SESSION['orderData'])) {
    header("Location: ordinazione.php");
    exit();
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aereiDB";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connessione al database fallita: " . $e->getMessage();
    die();
}

// Verifica se è stato inviato un termine di ricerca
if (isset($_POST['search'])) {
    $searchTerm = $_POST['search'];

    // Query per recuperare i dati degli aerei con il termine di ricerca
    $stmt = $conn->prepare("SELECT * FROM aerei WHERE Marca LIKE :searchTerm OR Modello LIKE :searchTerm");
    $stmt->bindValue(':searchTerm', '%' . $searchTerm . '%', PDO::PARAM_STR);
    $stmt->execute();
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
} else {
    // Se il termine di ricerca non è stato specificato, mostra tutti gli aerei
    $stmt = $conn->query("SELECT * FROM aerei");
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?><?php
session_start();

if (!isset($_SESSION['orderData'])) {
    header("Location: ordinazione.php");
    exit();
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aereiDB";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connessione al database fallita: " . $e->getMessage();
    die();
}

// Verifica se è stato inviato un termine di ricerca
if (isset($_POST['search'])) {
    $searchTerm = $_POST['search'];

    // Query per recuperare i dati degli aerei con il termine di ricerca
    $stmt = $conn->prepare("SELECT * FROM aerei WHERE Marca LIKE :searchTerm OR Modello LIKE :searchTerm");
    $stmt->bindValue(':searchTerm', '%' . $searchTerm . '%', PDO::PARAM_STR);
    $stmt->execute();
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
} else {
    // Se il termine di ricerca non è stato specificato, mostra tutti gli aerei
    $stmt = $conn->query("SELECT * FROM aerei");
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?><?php
session_start();

if (!isset($_SESSION['orderData'])) {
    header("Location: ordinazione.php");
    exit();
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aereiDB";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connessione al database fallita: " . $e->getMessage();
    die();
}

// Verifica se è stato inviato un termine di ricerca
if (isset($_POST['search'])) {
    $searchTerm = $_POST['search'];

    // Query per recuperare i dati degli aerei con il termine di ricerca
    $stmt = $conn->prepare("SELECT * FROM aerei WHERE Marca LIKE :searchTerm OR Modello LIKE :searchTerm");
    $stmt->bindValue(':searchTerm', '%' . $searchTerm . '%', PDO::PARAM_STR);
    $stmt->execute();
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
} else {
    // Se il termine di ricerca non è stato specificato, mostra tutti gli aerei
    $stmt = $conn->query("SELECT * FROM aerei");
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?><?php
session_start();

if (!isset($_SESSION['orderData'])) {
    header("Location: ordinazione.php");
    exit();
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aereiDB";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connessione al database fallita: " . $e->getMessage();
    die();
}

// Verifica se è stato inviato un termine di ricerca
if (isset($_POST['search'])) {
    $searchTerm = $_POST['search'];

    // Query per recuperare i dati degli aerei con il termine di ricerca
    $stmt = $conn->prepare("SELECT * FROM aerei WHERE Marca LIKE :searchTerm OR Modello LIKE :searchTerm");
    $stmt->bindValue(':searchTerm', '%' . $searchTerm . '%', PDO::PARAM_STR);
    $stmt->execute();
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
} else {
    // Se il termine di ricerca non è stato specificato, mostra tutti gli aerei
    $stmt = $conn->query("SELECT * FROM aerei");
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?><?php
session_start();

if (!isset($_SESSION['orderData'])) {
    header("Location: ordinazione.php");
    exit();
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aereiDB";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connessione al database fallita: " . $e->getMessage();
    die();
}

// Verifica se è stato inviato un termine di ricerca
if (isset($_POST['search'])) {
    $searchTerm = $_POST['search'];

    // Query per recuperare i dati degli aerei con il termine di ricerca
    $stmt = $conn->prepare("SELECT * FROM aerei WHERE Marca LIKE :searchTerm OR Modello LIKE :searchTerm");
    $stmt->bindValue(':searchTerm', '%' . $searchTerm . '%', PDO::PARAM_STR);
    $stmt->execute();
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
} else {
    // Se il termine di ricerca non è stato specificato, mostra tutti gli aerei
    $stmt = $conn->query("SELECT * FROM aerei");
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?><?php
session_start();

if (!isset($_SESSION['orderData'])) {
    header("Location: ordinazione.php");
    exit();
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aereiDB";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connessione al database fallita: " . $e->getMessage();
    die();
}

// Verifica se è stato inviato un termine di ricerca
if (isset($_POST['search'])) {
    $searchTerm = $_POST['search'];

    // Query per recuperare i dati degli aerei con il termine di ricerca
    $stmt = $conn->prepare("SELECT * FROM aerei WHERE Marca LIKE :searchTerm OR Modello LIKE :searchTerm");
    $stmt->bindValue(':searchTerm', '%' . $searchTerm . '%', PDO::PARAM_STR);
    $stmt->execute();
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
} else {
    // Se il termine di ricerca non è stato specificato, mostra tutti gli aerei
    $stmt = $conn->query("SELECT * FROM aerei");
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?><?php
session_start();

if (!isset($_SESSION['orderData'])) {
    header("Location: ordinazione.php");
    exit();
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aereiDB";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connessione al database fallita: " . $e->getMessage();
    die();
}

// Verifica se è stato inviato un termine di ricerca
if (isset($_POST['search'])) {
    $searchTerm = $_POST['search'];

    // Query per recuperare i dati degli aerei con il termine di ricerca
    $stmt = $conn->prepare("SELECT * FROM aerei WHERE Marca LIKE :searchTerm OR Modello LIKE :searchTerm");
    $stmt->bindValue(':searchTerm', '%' . $searchTerm . '%', PDO::PARAM_STR);
    $stmt->execute();
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
} else {
    // Se il termine di ricerca non è stato specificato, mostra tutti gli aerei
    $stmt = $conn->query("SELECT * FROM aerei");
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?><?php
session_start();

if (!isset($_SESSION['orderData'])) {
    header("Location: ordinazione.php");
    exit();
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aereiDB";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connessione al database fallita: " . $e->getMessage();
    die();
}

// Verifica se è stato inviato un termine di ricerca
if (isset($_POST['search'])) {
    $searchTerm = $_POST['search'];

    // Query per recuperare i dati degli aerei con il termine di ricerca
    $stmt = $conn->prepare("SELECT * FROM aerei WHERE Marca LIKE :searchTerm OR Modello LIKE :searchTerm");
    $stmt->bindValue(':searchTerm', '%' . $searchTerm . '%', PDO::PARAM_STR);
    $stmt->execute();
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
} else {
    // Se il termine di ricerca non è stato specificato, mostra tutti gli aerei
    $stmt = $conn->query("SELECT * FROM aerei");
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?><?php
session_start();

if (!isset($_SESSION['orderData'])) {
    header("Location: ordinazione.php");
    exit();
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aereiDB";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connessione al database fallita: " . $e->getMessage();
    die();
}

// Verifica se è stato inviato un termine di ricerca
if (isset($_POST['search'])) {
    $searchTerm = $_POST['search'];

    // Query per recuperare i dati degli aerei con il termine di ricerca
    $stmt = $conn->prepare("SELECT * FROM aerei WHERE Marca LIKE :searchTerm OR Modello LIKE :searchTerm");
    $stmt->bindValue(':searchTerm', '%' . $searchTerm . '%', PDO::PARAM_STR);
    $stmt->execute();
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
} else {
    // Se il termine di ricerca non è stato specificato, mostra tutti gli aerei
    $stmt = $conn->query("SELECT * FROM aerei");
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?><?php
session_start();

if (!isset($_SESSION['orderData'])) {
    header("Location: ordinazione.php");
    exit();
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aereiDB";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connessione al database fallita: " . $e->getMessage();
    die();
}

// Verifica se è stato inviato un termine di ricerca
if (isset($_POST['search'])) {
    $searchTerm = $_POST['search'];

    // Query per recuperare i dati degli aerei con il termine di ricerca
    $stmt = $conn->prepare("SELECT * FROM aerei WHERE Marca LIKE :searchTerm OR Modello LIKE :searchTerm");
    $stmt->bindValue(':searchTerm', '%' . $searchTerm . '%', PDO::PARAM_STR);
    $stmt->execute();
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
} else {
    // Se il termine di ricerca non è stato specificato, mostra tutti gli aerei
    $stmt = $conn->query("SELECT * FROM aerei");
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?><?php
session_start();

if (!isset($_SESSION['orderData'])) {
    header("Location: ordinazione.php");
    exit();
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aereiDB";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connessione al database fallita: " . $e->getMessage();
    die();
}

// Verifica se è stato inviato un termine di ricerca
if (isset($_POST['search'])) {
    $searchTerm = $_POST['search'];

    // Query per recuperare i dati degli aerei con il termine di ricerca
    $stmt = $conn->prepare("SELECT * FROM aerei WHERE Marca LIKE :searchTerm OR Modello LIKE :searchTerm");
    $stmt->bindValue(':searchTerm', '%' . $searchTerm . '%', PDO::PARAM_STR);
    $stmt->execute();
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
} else {
    // Se il termine di ricerca non è stato specificato, mostra tutti gli aerei
    $stmt = $conn->query("SELECT * FROM aerei");
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?><?php
session_start();

if (!isset($_SESSION['orderData'])) {
    header("Location: ordinazione.php");
    exit();
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aereiDB";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connessione al database fallita: " . $e->getMessage();
    die();
}

// Verifica se è stato inviato un termine di ricerca
if (isset($_POST['search'])) {
    $searchTerm = $_POST['search'];

    // Query per recuperare i dati degli aerei con il termine di ricerca
    $stmt = $conn->prepare("SELECT * FROM aerei WHERE Marca LIKE :searchTerm OR Modello LIKE :searchTerm");
    $stmt->bindValue(':searchTerm', '%' . $searchTerm . '%', PDO::PARAM_STR);
    $stmt->execute();
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
} else {
    // Se il termine di ricerca non è stato specificato, mostra tutti gli aerei
    $stmt = $conn->query("SELECT * FROM aerei");
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?><?php
session_start();

if (!isset($_SESSION['orderData'])) {
    header("Location: ordinazione.php");
    exit();
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aereiDB";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connessione al database fallita: " . $e->getMessage();
    die();
}

// Verifica se è stato inviato un termine di ricerca
if (isset($_POST['search'])) {
    $searchTerm = $_POST['search'];

    // Query per recuperare i dati degli aerei con il termine di ricerca
    $stmt = $conn->prepare("SELECT * FROM aerei WHERE Marca LIKE :searchTerm OR Modello LIKE :searchTerm");
    $stmt->bindValue(':searchTerm', '%' . $searchTerm . '%', PDO::PARAM_STR);
    $stmt->execute();
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
} else {
    // Se il termine di ricerca non è stato specificato, mostra tutti gli aerei
    $stmt = $conn->query("SELECT * FROM aerei");
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?><?php
session_start();

if (!isset($_SESSION['orderData'])) {
    header("Location: ordinazione.php");
    exit();
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aereiDB";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connessione al database fallita: " . $e->getMessage();
    die();
}

// Verifica se è stato inviato un termine di ricerca
if (isset($_POST['search'])) {
    $searchTerm = $_POST['search'];

    // Query per recuperare i dati degli aerei con il termine di ricerca
    $stmt = $conn->prepare("SELECT * FROM aerei WHERE Marca LIKE :searchTerm OR Modello LIKE :searchTerm");
    $stmt->bindValue(':searchTerm', '%' . $searchTerm . '%', PDO::PARAM_STR);
    $stmt->execute();
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
} else {
    // Se il termine di ricerca non è stato specificato, mostra tutti gli aerei
    $stmt = $conn->query("SELECT * FROM aerei");
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?><?php
session_start();

if (!isset($_SESSION['orderData'])) {
    header("Location: ordinazione.php");
    exit();
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aereiDB";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connessione al database fallita: " . $e->getMessage();
    die();
}

// Verifica se è stato inviato un termine di ricerca
if (isset($_POST['search'])) {
    $searchTerm = $_POST['search'];

    // Query per recuperare i dati degli aerei con il termine di ricerca
    $stmt = $conn->prepare("SELECT * FROM aerei WHERE Marca LIKE :searchTerm OR Modello LIKE :searchTerm");
    $stmt->bindValue(':searchTerm', '%' . $searchTerm . '%', PDO::PARAM_STR);
    $stmt->execute();
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
} else {
    // Se il termine di ricerca non è stato specificato, mostra tutti gli aerei
    $stmt = $conn->query("SELECT * FROM aerei");
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?><?php
session_start();

if (!isset($_SESSION['orderData'])) {
    header("Location: ordinazione.php");
    exit();
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aereiDB";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connessione al database fallita: " . $e->getMessage();
    die();
}

// Verifica se è stato inviato un termine di ricerca
if (isset($_POST['search'])) {
    $searchTerm = $_POST['search'];

    // Query per recuperare i dati degli aerei con il termine di ricerca
    $stmt = $conn->prepare("SELECT * FROM aerei WHERE Marca LIKE :searchTerm OR Modello LIKE :searchTerm");
    $stmt->bindValue(':searchTerm', '%' . $searchTerm . '%', PDO::PARAM_STR);
    $stmt->execute();
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
} else {
    // Se il termine di ricerca non è stato specificato, mostra tutti gli aerei
    $stmt = $conn->query("SELECT * FROM aerei");
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?><?php
session_start();

if (!isset($_SESSION['orderData'])) {
    header("Location: ordinazione.php");
    exit();
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aereiDB";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connessione al database fallita: " . $e->getMessage();
    die();
}

// Verifica se è stato inviato un termine di ricerca
if (isset($_POST['search'])) {
    $searchTerm = $_POST['search'];

    // Query per recuperare i dati degli aerei con il termine di ricerca
    $stmt = $conn->prepare("SELECT * FROM aerei WHERE Marca LIKE :searchTerm OR Modello LIKE :searchTerm");
    $stmt->bindValue(':searchTerm', '%' . $searchTerm . '%', PDO::PARAM_STR);
    $stmt->execute();
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
} else {
    // Se il termine di ricerca non è stato specificato, mostra tutti gli aerei
    $stmt = $conn->query("SELECT * FROM aerei");
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?><?php
session_start();

if (!isset($_SESSION['orderData'])) {
    header("Location: ordinazione.php");
    exit();
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aereiDB";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connessione al database fallita: " . $e->getMessage();
    die();
}

// Verifica se è stato inviato un termine di ricerca
if (isset($_POST['search'])) {
    $searchTerm = $_POST['search'];

    // Query per recuperare i dati degli aerei con il termine di ricerca
    $stmt = $conn->prepare("SELECT * FROM aerei WHERE Marca LIKE :searchTerm OR Modello LIKE :searchTerm");
    $stmt->bindValue(':searchTerm', '%' . $searchTerm . '%', PDO::PARAM_STR);
    $stmt->execute();
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
} else {
    // Se il termine di ricerca non è stato specificato, mostra tutti gli aerei
    $stmt = $conn->query("SELECT * FROM aerei");
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?><?php
session_start();

if (!isset($_SESSION['orderData'])) {
    header("Location: ordinazione.php");
    exit();
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aereiDB";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connessione al database fallita: " . $e->getMessage();
    die();
}

// Verifica se è stato inviato un termine di ricerca
if (isset($_POST['search'])) {
    $searchTerm = $_POST['search'];

    // Query per recuperare i dati degli aerei con il termine di ricerca
    $stmt = $conn->prepare("SELECT * FROM aerei WHERE Marca LIKE :searchTerm OR Modello LIKE :searchTerm");
    $stmt->bindValue(':searchTerm', '%' . $searchTerm . '%', PDO::PARAM_STR);
    $stmt->execute();
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
} else {
    // Se il termine di ricerca non è stato specificato, mostra tutti gli aerei
    $stmt = $conn->query("SELECT * FROM aerei");
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?><?php
session_start();

if (!isset($_SESSION['orderData'])) {
    header("Location: ordinazione.php");
    exit();
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aereiDB";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connessione al database fallita: " . $e->getMessage();
    die();
}

// Verifica se è stato inviato un termine di ricerca
if (isset($_POST['search'])) {
    $searchTerm = $_POST['search'];

    // Query per recuperare i dati degli aerei con il termine di ricerca
    $stmt = $conn->prepare("SELECT * FROM aerei WHERE Marca LIKE :searchTerm OR Modello LIKE :searchTerm");
    $stmt->bindValue(':searchTerm', '%' . $searchTerm . '%', PDO::PARAM_STR);
    $stmt->execute();
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
} else {
    // Se il termine di ricerca non è stato specificato, mostra tutti gli aerei
    $stmt = $conn->query("SELECT * FROM aerei");
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?><?php
session_start();

if (!isset($_SESSION['orderData'])) {
    header("Location: ordinazione.php");
    exit();
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aereiDB";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connessione al database fallita: " . $e->getMessage();
    die();
}

// Verifica se è stato inviato un termine di ricerca
if (isset($_POST['search'])) {
    $searchTerm = $_POST['search'];

    // Query per recuperare i dati degli aerei con il termine di ricerca
    $stmt = $conn->prepare("SELECT * FROM aerei WHERE Marca LIKE :searchTerm OR Modello LIKE :searchTerm");
    $stmt->bindValue(':searchTerm', '%' . $searchTerm . '%', PDO::PARAM_STR);
    $stmt->execute();
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
} else {
    // Se il termine di ricerca non è stato specificato, mostra tutti gli aerei
    $stmt = $conn->query("SELECT * FROM aerei");
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?><?php
session_start();

if (!isset($_SESSION['orderData'])) {
    header("Location: ordinazione.php");
    exit();
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aereiDB";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connessione al database fallita: " . $e->getMessage();
    die();
}

// Verifica se è stato inviato un termine di ricerca
if (isset($_POST['search'])) {
    $searchTerm = $_POST['search'];

    // Query per recuperare i dati degli aerei con il termine di ricerca
    $stmt = $conn->prepare("SELECT * FROM aerei WHERE Marca LIKE :searchTerm OR Modello LIKE :searchTerm");
    $stmt->bindValue(':searchTerm', '%' . $searchTerm . '%', PDO::PARAM_STR);
    $stmt->execute();
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
} else {
    // Se il termine di ricerca non è stato specificato, mostra tutti gli aerei
    $stmt = $conn->query("SELECT * FROM aerei");
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?><?php
session_start();

if (!isset($_SESSION['orderData'])) {
    header("Location: ordinazione.php");
    exit();
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aereiDB";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connessione al database fallita: " . $e->getMessage();
    die();
}

// Verifica se è stato inviato un termine di ricerca
if (isset($_POST['search'])) {
    $searchTerm = $_POST['search'];

    // Query per recuperare i dati degli aerei con il termine di ricerca
    $stmt = $conn->prepare("SELECT * FROM aerei WHERE Marca LIKE :searchTerm OR Modello LIKE :searchTerm");
    $stmt->bindValue(':searchTerm', '%' . $searchTerm . '%', PDO::PARAM_STR);
    $stmt->execute();
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
} else {
    // Se il termine di ricerca non è stato specificato, mostra tutti gli aerei
    $stmt = $conn->query("SELECT * FROM aerei");
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?><?php
session_start();

if (!isset($_SESSION['orderData'])) {
    header("Location: ordinazione.php");
    exit();
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aereiDB";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connessione al database fallita: " . $e->getMessage();
    die();
}

// Verifica se è stato inviato un termine di ricerca
if (isset($_POST['search'])) {
    $searchTerm = $_POST['search'];

    // Query per recuperare i dati degli aerei con il termine di ricerca
    $stmt = $conn->prepare("SELECT * FROM aerei WHERE Marca LIKE :searchTerm OR Modello LIKE :searchTerm");
    $stmt->bindValue(':searchTerm', '%' . $searchTerm . '%', PDO::PARAM_STR);
    $stmt->execute();
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
} else {
    // Se il termine di ricerca non è stato specificato, mostra tutti gli aerei
    $stmt = $conn->query("SELECT * FROM aerei");
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?><?php
session_start();

if (!isset($_SESSION['orderData'])) {
    header("Location: ordinazione.php");
    exit();
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aereiDB";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connessione al database fallita: " . $e->getMessage();
    die();
}

// Verifica se è stato inviato un termine di ricerca
if (isset($_POST['search'])) {
    $searchTerm = $_POST['search'];

    // Query per recuperare i dati degli aerei con il termine di ricerca
    $stmt = $conn->prepare("SELECT * FROM aerei WHERE Marca LIKE :searchTerm OR Modello LIKE :searchTerm");
    $stmt->bindValue(':searchTerm', '%' . $searchTerm . '%', PDO::PARAM_STR);
    $stmt->execute();
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
} else {
    // Se il termine di ricerca non è stato specificato, mostra tutti gli aerei
    $stmt = $conn->query("SELECT * FROM aerei");
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?><?php
session_start();

if (!isset($_SESSION['orderData'])) {
    header("Location: ordinazione.php");
    exit();
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aereiDB";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connessione al database fallita: " . $e->getMessage();
    die();
}

// Verifica se è stato inviato un termine di ricerca
if (isset($_POST['search'])) {
    $searchTerm = $_POST['search'];

    // Query per recuperare i dati degli aerei con il termine di ricerca
    $stmt = $conn->prepare("SELECT * FROM aerei WHERE Marca LIKE :searchTerm OR Modello LIKE :searchTerm");
    $stmt->bindValue(':searchTerm', '%' . $searchTerm . '%', PDO::PARAM_STR);
    $stmt->execute();
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
} else {
    // Se il termine di ricerca non è stato specificato, mostra tutti gli aerei
    $stmt = $conn->query("SELECT * FROM aerei");
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?><?php
session_start();

if (!isset($_SESSION['orderData'])) {
    header("Location: ordinazione.php");
    exit();
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aereiDB";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connessione al database fallita: " . $e->getMessage();
    die();
}

// Verifica se è stato inviato un termine di ricerca
if (isset($_POST['search'])) {
    $searchTerm = $_POST['search'];

    // Query per recuperare i dati degli aerei con il termine di ricerca
    $stmt = $conn->prepare("SELECT * FROM aerei WHERE Marca LIKE :searchTerm OR Modello LIKE :searchTerm");
    $stmt->bindValue(':searchTerm', '%' . $searchTerm . '%', PDO::PARAM_STR);
    $stmt->execute();
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
} else {
    // Se il termine di ricerca non è stato specificato, mostra tutti gli aerei
    $stmt = $conn->query("SELECT * FROM aerei");
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?><?php
session_start();

if (!isset($_SESSION['orderData'])) {
    header("Location: ordinazione.php");
    exit();
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aereiDB";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connessione al database fallita: " . $e->getMessage();
    die();
}

// Verifica se è stato inviato un termine di ricerca
if (isset($_POST['search'])) {
    $searchTerm = $_POST['search'];

    // Query per recuperare i dati degli aerei con il termine di ricerca
    $stmt = $conn->prepare("SELECT * FROM aerei WHERE Marca LIKE :searchTerm OR Modello LIKE :searchTerm");
    $stmt->bindValue(':searchTerm', '%' . $searchTerm . '%', PDO::PARAM_STR);
    $stmt->execute();
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
} else {
    // Se il termine di ricerca non è stato specificato, mostra tutti gli aerei
    $stmt = $conn->query("SELECT * FROM aerei");
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?><?php
session_start();

if (!isset($_SESSION['orderData'])) {
    header("Location: ordinazione.php");
    exit();
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aereiDB";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connessione al database fallita: " . $e->getMessage();
    die();
}

// Verifica se è stato inviato un termine di ricerca
if (isset($_POST['search'])) {
    $searchTerm = $_POST['search'];

    // Query per recuperare i dati degli aerei con il termine di ricerca
    $stmt = $conn->prepare("SELECT * FROM aerei WHERE Marca LIKE :searchTerm OR Modello LIKE :searchTerm");
    $stmt->bindValue(':searchTerm', '%' . $searchTerm . '%', PDO::PARAM_STR);
    $stmt->execute();
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
} else {
    // Se il termine di ricerca non è stato specificato, mostra tutti gli aerei
    $stmt = $conn->query("SELECT * FROM aerei");
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?><?php
session_start();

if (!isset($_SESSION['orderData'])) {
    header("Location: ordinazione.php");
    exit();
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aereiDB";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connessione al database fallita: " . $e->getMessage();
    die();
}

// Verifica se è stato inviato un termine di ricerca
if (isset($_POST['search'])) {
    $searchTerm = $_POST['search'];

    // Query per recuperare i dati degli aerei con il termine di ricerca
    $stmt = $conn->prepare("SELECT * FROM aerei WHERE Marca LIKE :searchTerm OR Modello LIKE :searchTerm");
    $stmt->bindValue(':searchTerm', '%' . $searchTerm . '%', PDO::PARAM_STR);
    $stmt->execute();
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
} else {
    // Se il termine di ricerca non è stato specificato, mostra tutti gli aerei
    $stmt = $conn->query("SELECT * FROM aerei");
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?><?php
session_start();

if (!isset($_SESSION['orderData'])) {
    header("Location: ordinazione.php");
    exit();
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aereiDB";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connessione al database fallita: " . $e->getMessage();
    die();
}

// Verifica se è stato inviato un termine di ricerca
if (isset($_POST['search'])) {
    $searchTerm = $_POST['search'];

    // Query per recuperare i dati degli aerei con il termine di ricerca
    $stmt = $conn->prepare("SELECT * FROM aerei WHERE Marca LIKE :searchTerm OR Modello LIKE :searchTerm");
    $stmt->bindValue(':searchTerm', '%' . $searchTerm . '%', PDO::PARAM_STR);
    $stmt->execute();
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
} else {
    // Se il termine di ricerca non è stato specificato, mostra tutti gli aerei
    $stmt = $conn->query("SELECT * FROM aerei");
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?><?php
session_start();

if (!isset($_SESSION['orderData'])) {
    header("Location: ordinazione.php");
    exit();
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aereiDB";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connessione al database fallita: " . $e->getMessage();
    die();
}

// Verifica se è stato inviato un termine di ricerca
if (isset($_POST['search'])) {
    $searchTerm = $_POST['search'];

    // Query per recuperare i dati degli aerei con il termine di ricerca
    $stmt = $conn->prepare("SELECT * FROM aerei WHERE Marca LIKE :searchTerm OR Modello LIKE :searchTerm");
    $stmt->bindValue(':searchTerm', '%' . $searchTerm . '%', PDO::PARAM_STR);
    $stmt->execute();
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
} else {
    // Se il termine di ricerca non è stato specificato, mostra tutti gli aerei
    $stmt = $conn->query("SELECT * FROM aerei");
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?><?php
session_start();

if (!isset($_SESSION['orderData'])) {
    header("Location: ordinazione.php");
    exit();
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aereiDB";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connessione al database fallita: " . $e->getMessage();
    die();
}

// Verifica se è stato inviato un termine di ricerca
if (isset($_POST['search'])) {
    $searchTerm = $_POST['search'];

    // Query per recuperare i dati degli aerei con il termine di ricerca
    $stmt = $conn->prepare("SELECT * FROM aerei WHERE Marca LIKE :searchTerm OR Modello LIKE :searchTerm");
    $stmt->bindValue(':searchTerm', '%' . $searchTerm . '%', PDO::PARAM_STR);
    $stmt->execute();
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
} else {
    // Se il termine di ricerca non è stato specificato, mostra tutti gli aerei
    $stmt = $conn->query("SELECT * FROM aerei");
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?><?php
session_start();

if (!isset($_SESSION['orderData'])) {
    header("Location: ordinazione.php");
    exit();
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aereiDB";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connessione al database fallita: " . $e->getMessage();
    die();
}

// Verifica se è stato inviato un termine di ricerca
if (isset($_POST['search'])) {
    $searchTerm = $_POST['search'];

    // Query per recuperare i dati degli aerei con il termine di ricerca
    $stmt = $conn->prepare("SELECT * FROM aerei WHERE Marca LIKE :searchTerm OR Modello LIKE :searchTerm");
    $stmt->bindValue(':searchTerm', '%' . $searchTerm . '%', PDO::PARAM_STR);
    $stmt->execute();
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
} else {
    // Se il termine di ricerca non è stato specificato, mostra tutti gli aerei
    $stmt = $conn->query("SELECT * FROM aerei");
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?><?php
session_start();

if (!isset($_SESSION['orderData'])) {
    header("Location: ordinazione.php");
    exit();
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aereiDB";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connessione al database fallita: " . $e->getMessage();
    die();
}

// Verifica se è stato inviato un termine di ricerca
if (isset($_POST['search'])) {
    $searchTerm = $_POST['search'];

    // Query per recuperare i dati degli aerei con il termine di ricerca
    $stmt = $conn->prepare("SELECT * FROM aerei WHERE Marca LIKE :searchTerm OR Modello LIKE :searchTerm");
    $stmt->bindValue(':searchTerm', '%' . $searchTerm . '%', PDO::PARAM_STR);
    $stmt->execute();
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
} else {
    // Se il termine di ricerca non è stato specificato, mostra tutti gli aerei
    $stmt = $conn->query("SELECT * FROM aerei");
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?><?php
session_start();

if (!isset($_SESSION['orderData'])) {
    header("Location: ordinazione.php");
    exit();
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aereiDB";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connessione al database fallita: " . $e->getMessage();
    die();
}

// Verifica se è stato inviato un termine di ricerca
if (isset($_POST['search'])) {
    $searchTerm = $_POST['search'];

    // Query per recuperare i dati degli aerei con il termine di ricerca
    $stmt = $conn->prepare("SELECT * FROM aerei WHERE Marca LIKE :searchTerm OR Modello LIKE :searchTerm");
    $stmt->bindValue(':searchTerm', '%' . $searchTerm . '%', PDO::PARAM_STR);
    $stmt->execute();
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
} else {
    // Se il termine di ricerca non è stato specificato, mostra tutti gli aerei
    $stmt = $conn->query("SELECT * FROM aerei");
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?><?php
session_start();

if (!isset($_SESSION['orderData'])) {
    header("Location: ordinazione.php");
    exit();
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aereiDB";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connessione al database fallita: " . $e->getMessage();
    die();
}

// Verifica se è stato inviato un termine di ricerca
if (isset($_POST['search'])) {
    $searchTerm = $_POST['search'];

    // Query per recuperare i dati degli aerei con il termine di ricerca
    $stmt = $conn->prepare("SELECT * FROM aerei WHERE Marca LIKE :searchTerm OR Modello LIKE :searchTerm");
    $stmt->bindValue(':searchTerm', '%' . $searchTerm . '%', PDO::PARAM_STR);
    $stmt->execute();
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
} else {
    // Se il termine di ricerca non è stato specificato, mostra tutti gli aerei
    $stmt = $conn->query("SELECT * FROM aerei");
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?><?php
session_start();

if (!isset($_SESSION['orderData'])) {
    header("Location: ordinazione.php");
    exit();
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aereiDB";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connessione al database fallita: " . $e->getMessage();
    die();
}

// Verifica se è stato inviato un termine di ricerca
if (isset($_POST['search'])) {
    $searchTerm = $_POST['search'];

    // Query per recuperare i dati degli aerei con il termine di ricerca
    $stmt = $conn->prepare("SELECT * FROM aerei WHERE Marca LIKE :searchTerm OR Modello LIKE :searchTerm");
    $stmt->bindValue(':searchTerm', '%' . $searchTerm . '%', PDO::PARAM_STR);
    $stmt->execute();
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
} else {
    // Se il termine di ricerca non è stato specificato, mostra tutti gli aerei
    $stmt = $conn->query("SELECT * FROM aerei");
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?><?php
session_start();

if (!isset($_SESSION['orderData'])) {
    header("Location: ordinazione.php");
    exit();
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aereiDB";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connessione al database fallita: " . $e->getMessage();
    die();
}

// Verifica se è stato inviato un termine di ricerca
if (isset($_POST['search'])) {
    $searchTerm = $_POST['search'];

    // Query per recuperare i dati degli aerei con il termine di ricerca
    $stmt = $conn->prepare("SELECT * FROM aerei WHERE Marca LIKE :searchTerm OR Modello LIKE :searchTerm");
    $stmt->bindValue(':searchTerm', '%' . $searchTerm . '%', PDO::PARAM_STR);
    $stmt->execute();
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
} else {
    // Se il termine di ricerca non è stato specificato, mostra tutti gli aerei
    $stmt = $conn->query("SELECT * FROM aerei");
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?><?php
session_start();

if (!isset($_SESSION['orderData'])) {
    header("Location: ordinazione.php");
    exit();
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aereiDB";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connessione al database fallita: " . $e->getMessage();
    die();
}

// Verifica se è stato inviato un termine di ricerca
if (isset($_POST['search'])) {
    $searchTerm = $_POST['search'];

    // Query per recuperare i dati degli aerei con il termine di ricerca
    $stmt = $conn->prepare("SELECT * FROM aerei WHERE Marca LIKE :searchTerm OR Modello LIKE :searchTerm");
    $stmt->bindValue(':searchTerm', '%' . $searchTerm . '%', PDO::PARAM_STR);
    $stmt->execute();
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
} else {
    // Se il termine di ricerca non è stato specificato, mostra tutti gli aerei
    $stmt = $conn->query("SELECT * FROM aerei");
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?><?php
session_start();

if (!isset($_SESSION['orderData'])) {
    header("Location: ordinazione.php");
    exit();
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aereiDB";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connessione al database fallita: " . $e->getMessage();
    die();
}

// Verifica se è stato inviato un termine di ricerca
if (isset($_POST['search'])) {
    $searchTerm = $_POST['search'];

    // Query per recuperare i dati degli aerei con il termine di ricerca
    $stmt = $conn->prepare("SELECT * FROM aerei WHERE Marca LIKE :searchTerm OR Modello LIKE :searchTerm");
    $stmt->bindValue(':searchTerm', '%' . $searchTerm . '%', PDO::PARAM_STR);
    $stmt->execute();
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
} else {
    // Se il termine di ricerca non è stato specificato, mostra tutti gli aerei
    $stmt = $conn->query("SELECT * FROM aerei");
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?><?php
session_start();

if (!isset($_SESSION['orderData'])) {
    header("Location: ordinazione.php");
    exit();
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aereiDB";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connessione al database fallita: " . $e->getMessage();
    die();
}

// Verifica se è stato inviato un termine di ricerca
if (isset($_POST['search'])) {
    $searchTerm = $_POST['search'];

    // Query per recuperare i dati degli aerei con il termine di ricerca
    $stmt = $conn->prepare("SELECT * FROM aerei WHERE Marca LIKE :searchTerm OR Modello LIKE :searchTerm");
    $stmt->bindValue(':searchTerm', '%' . $searchTerm . '%', PDO::PARAM_STR);
    $stmt->execute();
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
} else {
    // Se il termine di ricerca non è stato specificato, mostra tutti gli aerei
    $stmt = $conn->query("SELECT * FROM aerei");
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?><?php
session_start();

if (!isset($_SESSION['orderData'])) {
    header("Location: ordinazione.php");
    exit();
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aereiDB";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connessione al database fallita: " . $e->getMessage();
    die();
}

// Verifica se è stato inviato un termine di ricerca
if (isset($_POST['search'])) {
    $searchTerm = $_POST['search'];

    // Query per recuperare i dati degli aerei con il termine di ricerca
    $stmt = $conn->prepare("SELECT * FROM aerei WHERE Marca LIKE :searchTerm OR Modello LIKE :searchTerm");
    $stmt->bindValue(':searchTerm', '%' . $searchTerm . '%', PDO::PARAM_STR);
    $stmt->execute();
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
} else {
    // Se il termine di ricerca non è stato specificato, mostra tutti gli aerei
    $stmt = $conn->query("SELECT * FROM aerei");
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?><?php
session_start();

if (!isset($_SESSION['orderData'])) {
    header("Location: ordinazione.php");
    exit();
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aereiDB";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connessione al database fallita: " . $e->getMessage();
    die();
}

// Verifica se è stato inviato un termine di ricerca
if (isset($_POST['search'])) {
    $searchTerm = $_POST['search'];

    // Query per recuperare i dati degli aerei con il termine di ricerca
    $stmt = $conn->prepare("SELECT * FROM aerei WHERE Marca LIKE :searchTerm OR Modello LIKE :searchTerm");
    $stmt->bindValue(':searchTerm', '%' . $searchTerm . '%', PDO::PARAM_STR);
    $stmt->execute();
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
} else {
    // Se il termine di ricerca non è stato specificato, mostra tutti gli aerei
    $stmt = $conn->query("SELECT * FROM aerei");
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?><?php
session_start();

if (!isset($_SESSION['orderData'])) {
    header("Location: ordinazione.php");
    exit();
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aereiDB";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connessione al database fallita: " . $e->getMessage();
    die();
}

// Verifica se è stato inviato un termine di ricerca
if (isset($_POST['search'])) {
    $searchTerm = $_POST['search'];

    // Query per recuperare i dati degli aerei con il termine di ricerca
    $stmt = $conn->prepare("SELECT * FROM aerei WHERE Marca LIKE :searchTerm OR Modello LIKE :searchTerm");
    $stmt->bindValue(':searchTerm', '%' . $searchTerm . '%', PDO::PARAM_STR);
    $stmt->execute();
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
} else {
    // Se il termine di ricerca non è stato specificato, mostra tutti gli aerei
    $stmt = $conn->query("SELECT * FROM aerei");
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?><?php
session_start();

if (!isset($_SESSION['orderData'])) {
    header("Location: ordinazione.php");
    exit();
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aereiDB";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connessione al database fallita: " . $e->getMessage();
    die();
}

// Verifica se è stato inviato un termine di ricerca
if (isset($_POST['search'])) {
    $searchTerm = $_POST['search'];

    // Query per recuperare i dati degli aerei con il termine di ricerca
    $stmt = $conn->prepare("SELECT * FROM aerei WHERE Marca LIKE :searchTerm OR Modello LIKE :searchTerm");
    $stmt->bindValue(':searchTerm', '%' . $searchTerm . '%', PDO::PARAM_STR);
    $stmt->execute();
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
} else {
    // Se il termine di ricerca non è stato specificato, mostra tutti gli aerei
    $stmt = $conn->query("SELECT * FROM aerei");
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?><?php
session_start();

if (!isset($_SESSION['orderData'])) {
    header("Location: ordinazione.php");
    exit();
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aereiDB";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connessione al database fallita: " . $e->getMessage();
    die();
}

// Verifica se è stato inviato un termine di ricerca
if (isset($_POST['search'])) {
    $searchTerm = $_POST['search'];

    // Query per recuperare i dati degli aerei con il termine di ricerca
    $stmt = $conn->prepare("SELECT * FROM aerei WHERE Marca LIKE :searchTerm OR Modello LIKE :searchTerm");
    $stmt->bindValue(':searchTerm', '%' . $searchTerm . '%', PDO::PARAM_STR);
    $stmt->execute();
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
} else {
    // Se il termine di ricerca non è stato specificato, mostra tutti gli aerei
    $stmt = $conn->query("SELECT * FROM aerei");
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?><?php
session_start();

if (!isset($_SESSION['orderData'])) {
    header("Location: ordinazione.php");
    exit();
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aereiDB";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connessione al database fallita: " . $e->getMessage();
    die();
}

// Verifica se è stato inviato un termine di ricerca
if (isset($_POST['search'])) {
    $searchTerm = $_POST['search'];

    // Query per recuperare i dati degli aerei con il termine di ricerca
    $stmt = $conn->prepare("SELECT * FROM aerei WHERE Marca LIKE :searchTerm OR Modello LIKE :searchTerm");
    $stmt->bindValue(':searchTerm', '%' . $searchTerm . '%', PDO::PARAM_STR);
    $stmt->execute();
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
} else {
    // Se il termine di ricerca non è stato specificato, mostra tutti gli aerei
    $stmt = $conn->query("SELECT * FROM aerei");
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?><?php
session_start();

if (!isset($_SESSION['orderData'])) {
    header("Location: ordinazione.php");
    exit();
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aereiDB";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connessione al database fallita: " . $e->getMessage();
    die();
}

// Verifica se è stato inviato un termine di ricerca
if (isset($_POST['search'])) {
    $searchTerm = $_POST['search'];

    // Query per recuperare i dati degli aerei con il termine di ricerca
    $stmt = $conn->prepare("SELECT * FROM aerei WHERE Marca LIKE :searchTerm OR Modello LIKE :searchTerm");
    $stmt->bindValue(':searchTerm', '%' . $searchTerm . '%', PDO::PARAM_STR);
    $stmt->execute();
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
} else {
    // Se il termine di ricerca non è stato specificato, mostra tutti gli aerei
    $stmt = $conn->query("SELECT * FROM aerei");
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?><?php
session_start();

if (!isset($_SESSION['orderData'])) {
    header("Location: ordinazione.php");
    exit();
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aereiDB";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connessione al database fallita: " . $e->getMessage();
    die();
}

// Verifica se è stato inviato un termine di ricerca
if (isset($_POST['search'])) {
    $searchTerm = $_POST['search'];

    // Query per recuperare i dati degli aerei con il termine di ricerca
    $stmt = $conn->prepare("SELECT * FROM aerei WHERE Marca LIKE :searchTerm OR Modello LIKE :searchTerm");
    $stmt->bindValue(':searchTerm', '%' . $searchTerm . '%', PDO::PARAM_STR);
    $stmt->execute();
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
} else {
    // Se il termine di ricerca non è stato specificato, mostra tutti gli aerei
    $stmt = $conn->query("SELECT * FROM aerei");
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?><?php
session_start();

if (!isset($_SESSION['orderData'])) {
    header("Location: ordinazione.php");
    exit();
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aereiDB";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connessione al database fallita: " . $e->getMessage();
    die();
}

// Verifica se è stato inviato un termine di ricerca
if (isset($_POST['search'])) {
    $searchTerm = $_POST['search'];

    // Query per recuperare i dati degli aerei con il termine di ricerca
    $stmt = $conn->prepare("SELECT * FROM aerei WHERE Marca LIKE :searchTerm OR Modello LIKE :searchTerm");
    $stmt->bindValue(':searchTerm', '%' . $searchTerm . '%', PDO::PARAM_STR);
    $stmt->execute();
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
} else {
    // Se il termine di ricerca non è stato specificato, mostra tutti gli aerei
    $stmt = $conn->query("SELECT * FROM aerei");
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?><?php
session_start();

if (!isset($_SESSION['orderData'])) {
    header("Location: ordinazione.php");
    exit();
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aereiDB";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connessione al database fallita: " . $e->getMessage();
    die();
}

// Verifica se è stato inviato un termine di ricerca
if (isset($_POST['search'])) {
    $searchTerm = $_POST['search'];

    // Query per recuperare i dati degli aerei con il termine di ricerca
    $stmt = $conn->prepare("SELECT * FROM aerei WHERE Marca LIKE :searchTerm OR Modello LIKE :searchTerm");
    $stmt->bindValue(':searchTerm', '%' . $searchTerm . '%', PDO::PARAM_STR);
    $stmt->execute();
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
} else {
    // Se il termine di ricerca non è stato specificato, mostra tutti gli aerei
    $stmt = $conn->query("SELECT * FROM aerei");
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?><?php
session_start();

if (!isset($_SESSION['orderData'])) {
    header("Location: ordinazione.php");
    exit();
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aereiDB";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connessione al database fallita: " . $e->getMessage();
    die();
}

// Verifica se è stato inviato un termine di ricerca
if (isset($_POST['search'])) {
    $searchTerm = $_POST['search'];

    // Query per recuperare i dati degli aerei con il termine di ricerca
    $stmt = $conn->prepare("SELECT * FROM aerei WHERE Marca LIKE :searchTerm OR Modello LIKE :searchTerm");
    $stmt->bindValue(':searchTerm', '%' . $searchTerm . '%', PDO::PARAM_STR);
    $stmt->execute();
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
} else {
    // Se il termine di ricerca non è stato specificato, mostra tutti gli aerei
    $stmt = $conn->query("SELECT * FROM aerei");
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?><?php
session_start();

if (!isset($_SESSION['orderData'])) {
    header("Location: ordinazione.php");
    exit();
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aereiDB";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connessione al database fallita: " . $e->getMessage();
    die();
}

// Verifica se è stato inviato un termine di ricerca
if (isset($_POST['search'])) {
    $searchTerm = $_POST['search'];

    // Query per recuperare i dati degli aerei con il termine di ricerca
    $stmt = $conn->prepare("SELECT * FROM aerei WHERE Marca LIKE :searchTerm OR Modello LIKE :searchTerm");
    $stmt->bindValue(':searchTerm', '%' . $searchTerm . '%', PDO::PARAM_STR);
    $stmt->execute();
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
} else {
    // Se il termine di ricerca non è stato specificato, mostra tutti gli aerei
    $stmt = $conn->query("SELECT * FROM aerei");
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?><?php
session_start();

if (!isset($_SESSION['orderData'])) {
    header("Location: ordinazione.php");
    exit();
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aereiDB";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connessione al database fallita: " . $e->getMessage();
    die();
}

// Verifica se è stato inviato un termine di ricerca
if (isset($_POST['search'])) {
    $searchTerm = $_POST['search'];

    // Query per recuperare i dati degli aerei con il termine di ricerca
    $stmt = $conn->prepare("SELECT * FROM aerei WHERE Marca LIKE :searchTerm OR Modello LIKE :searchTerm");
    $stmt->bindValue(':searchTerm', '%' . $searchTerm . '%', PDO::PARAM_STR);
    $stmt->execute();
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
} else {
    // Se il termine di ricerca non è stato specificato, mostra tutti gli aerei
    $stmt = $conn->query("SELECT * FROM aerei");
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?><?php
session_start();

if (!isset($_SESSION['orderData'])) {
    header("Location: ordinazione.php");
    exit();
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aereiDB";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connessione al database fallita: " . $e->getMessage();
    die();
}

// Verifica se è stato inviato un termine di ricerca
if (isset($_POST['search'])) {
    $searchTerm = $_POST['search'];

    // Query per recuperare i dati degli aerei con il termine di ricerca
    $stmt = $conn->prepare("SELECT * FROM aerei WHERE Marca LIKE :searchTerm OR Modello LIKE :searchTerm");
    $stmt->bindValue(':searchTerm', '%' . $searchTerm . '%', PDO::PARAM_STR);
    $stmt->execute();
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
} else {
    // Se il termine di ricerca non è stato specificato, mostra tutti gli aerei
    $stmt = $conn->query("SELECT * FROM aerei");
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?><?php
session_start();

if (!isset($_SESSION['orderData'])) {
    header("Location: ordinazione.php");
    exit();
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aereiDB";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connessione al database fallita: " . $e->getMessage();
    die();
}

// Verifica se è stato inviato un termine di ricerca
if (isset($_POST['search'])) {
    $searchTerm = $_POST['search'];

    // Query per recuperare i dati degli aerei con il termine di ricerca
    $stmt = $conn->prepare("SELECT * FROM aerei WHERE Marca LIKE :searchTerm OR Modello LIKE :searchTerm");
    $stmt->bindValue(':searchTerm', '%' . $searchTerm . '%', PDO::PARAM_STR);
    $stmt->execute();
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
} else {
    // Se il termine di ricerca non è stato specificato, mostra tutti gli aerei
    $stmt = $conn->query("SELECT * FROM aerei");
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?><?php
session_start();

if (!isset($_SESSION['orderData'])) {
    header("Location: ordinazione.php");
    exit();
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aereiDB";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connessione al database fallita: " . $e->getMessage();
    die();
}

// Verifica se è stato inviato un termine di ricerca
if (isset($_POST['search'])) {
    $searchTerm = $_POST['search'];

    // Query per recuperare i dati degli aerei con il termine di ricerca
    $stmt = $conn->prepare("SELECT * FROM aerei WHERE Marca LIKE :searchTerm OR Modello LIKE :searchTerm");
    $stmt->bindValue(':searchTerm', '%' . $searchTerm . '%', PDO::PARAM_STR);
    $stmt->execute();
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
} else {
    // Se il termine di ricerca non è stato specificato, mostra tutti gli aerei
    $stmt = $conn->query("SELECT * FROM aerei");
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?><?php
session_start();

if (!isset($_SESSION['orderData'])) {
    header("Location: ordinazione.php");
    exit();
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aereiDB";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connessione al database fallita: " . $e->getMessage();
    die();
}

// Verifica se è stato inviato un termine di ricerca
if (isset($_POST['search'])) {
    $searchTerm = $_POST['search'];

    // Query per recuperare i dati degli aerei con il termine di ricerca
    $stmt = $conn->prepare("SELECT * FROM aerei WHERE Marca LIKE :searchTerm OR Modello LIKE :searchTerm");
    $stmt->bindValue(':searchTerm', '%' . $searchTerm . '%', PDO::PARAM_STR);
    $stmt->execute();
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
} else {
    // Se il termine di ricerca non è stato specificato, mostra tutti gli aerei
    $stmt = $conn->query("SELECT * FROM aerei");
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?><?php
session_start();

if (!isset($_SESSION['orderData'])) {
    header("Location: ordinazione.php");
    exit();
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aereiDB";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connessione al database fallita: " . $e->getMessage();
    die();
}

// Verifica se è stato inviato un termine di ricerca
if (isset($_POST['search'])) {
    $searchTerm = $_POST['search'];

    // Query per recuperare i dati degli aerei con il termine di ricerca
    $stmt = $conn->prepare("SELECT * FROM aerei WHERE Marca LIKE :searchTerm OR Modello LIKE :searchTerm");
    $stmt->bindValue(':searchTerm', '%' . $searchTerm . '%', PDO::PARAM_STR);
    $stmt->execute();
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
} else {
    // Se il termine di ricerca non è stato specificato, mostra tutti gli aerei
    $stmt = $conn->query("SELECT * FROM aerei");
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?><?php
session_start();

if (!isset($_SESSION['orderData'])) {
    header("Location: ordinazione.php");
    exit();
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aereiDB";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connessione al database fallita: " . $e->getMessage();
    die();
}

// Verifica se è stato inviato un termine di ricerca
if (isset($_POST['search'])) {
    $searchTerm = $_POST['search'];

    // Query per recuperare i dati degli aerei con il termine di ricerca
    $stmt = $conn->prepare("SELECT * FROM aerei WHERE Marca LIKE :searchTerm OR Modello LIKE :searchTerm");
    $stmt->bindValue(':searchTerm', '%' . $searchTerm . '%', PDO::PARAM_STR);
    $stmt->execute();
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
} else {
    // Se il termine di ricerca non è stato specificato, mostra tutti gli aerei
    $stmt = $conn->query("SELECT * FROM aerei");
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?><?php
session_start();

if (!isset($_SESSION['orderData'])) {
    header("Location: ordinazione.php");
    exit();
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aereiDB";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connessione al database fallita: " . $e->getMessage();
    die();
}

// Verifica se è stato inviato un termine di ricerca
if (isset($_POST['search'])) {
    $searchTerm = $_POST['search'];

    // Query per recuperare i dati degli aerei con il termine di ricerca
    $stmt = $conn->prepare("SELECT * FROM aerei WHERE Marca LIKE :searchTerm OR Modello LIKE :searchTerm");
    $stmt->bindValue(':searchTerm', '%' . $searchTerm . '%', PDO::PARAM_STR);
    $stmt->execute();
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
} else {
    // Se il termine di ricerca non è stato specificato, mostra tutti gli aerei
    $stmt = $conn->query("SELECT * FROM aerei");
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?><?php
session_start();

if (!isset($_SESSION['orderData'])) {
    header("Location: ordinazione.php");
    exit();
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aereiDB";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connessione al database fallita: " . $e->getMessage();
    die();
}

// Verifica se è stato inviato un termine di ricerca
if (isset($_POST['search'])) {
    $searchTerm = $_POST['search'];

    // Query per recuperare i dati degli aerei con il termine di ricerca
    $stmt = $conn->prepare("SELECT * FROM aerei WHERE Marca LIKE :searchTerm OR Modello LIKE :searchTerm");
    $stmt->bindValue(':searchTerm', '%' . $searchTerm . '%', PDO::PARAM_STR);
    $stmt->execute();
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
} else {
    // Se il termine di ricerca non è stato specificato, mostra tutti gli aerei
    $stmt = $conn->query("SELECT * FROM aerei");
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?><?php
session_start();

if (!isset($_SESSION['orderData'])) {
    header("Location: ordinazione.php");
    exit();
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aereiDB";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connessione al database fallita: " . $e->getMessage();
    die();
}

// Verifica se è stato inviato un termine di ricerca
if (isset($_POST['search'])) {
    $searchTerm = $_POST['search'];

    // Query per recuperare i dati degli aerei con il termine di ricerca
    $stmt = $conn->prepare("SELECT * FROM aerei WHERE Marca LIKE :searchTerm OR Modello LIKE :searchTerm");
    $stmt->bindValue(':searchTerm', '%' . $searchTerm . '%', PDO::PARAM_STR);
    $stmt->execute();
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
} else {
    // Se il termine di ricerca non è stato specificato, mostra tutti gli aerei
    $stmt = $conn->query("SELECT * FROM aerei");
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?><?php
session_start();

if (!isset($_SESSION['orderData'])) {
    header("Location: ordinazione.php");
    exit();
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aereiDB";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connessione al database fallita: " . $e->getMessage();
    die();
}

// Verifica se è stato inviato un termine di ricerca
if (isset($_POST['search'])) {
    $searchTerm = $_POST['search'];

    // Query per recuperare i dati degli aerei con il termine di ricerca
    $stmt = $conn->prepare("SELECT * FROM aerei WHERE Marca LIKE :searchTerm OR Modello LIKE :searchTerm");
    $stmt->bindValue(':searchTerm', '%' . $searchTerm . '%', PDO::PARAM_STR);
    $stmt->execute();
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
} else {
    // Se il termine di ricerca non è stato specificato, mostra tutti gli aerei
    $stmt = $conn->query("SELECT * FROM aerei");
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?><?php
session_start();

if (!isset($_SESSION['orderData'])) {
    header("Location: ordinazione.php");
    exit();
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aereiDB";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connessione al database fallita: " . $e->getMessage();
    die();
}

// Verifica se è stato inviato un termine di ricerca
if (isset($_POST['search'])) {
    $searchTerm = $_POST['search'];

    // Query per recuperare i dati degli aerei con il termine di ricerca
    $stmt = $conn->prepare("SELECT * FROM aerei WHERE Marca LIKE :searchTerm OR Modello LIKE :searchTerm");
    $stmt->bindValue(':searchTerm', '%' . $searchTerm . '%', PDO::PARAM_STR);
    $stmt->execute();
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
} else {
    // Se il termine di ricerca non è stato specificato, mostra tutti gli aerei
    $stmt = $conn->query("SELECT * FROM aerei");
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?><?php
session_start();

if (!isset($_SESSION['orderData'])) {
    header("Location: ordinazione.php");
    exit();
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aereiDB";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connessione al database fallita: " . $e->getMessage();
    die();
}

// Verifica se è stato inviato un termine di ricerca
if (isset($_POST['search'])) {
    $searchTerm = $_POST['search'];

    // Query per recuperare i dati degli aerei con il termine di ricerca
    $stmt = $conn->prepare("SELECT * FROM aerei WHERE Marca LIKE :searchTerm OR Modello LIKE :searchTerm");
    $stmt->bindValue(':searchTerm', '%' . $searchTerm . '%', PDO::PARAM_STR);
    $stmt->execute();
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
} else {
    // Se il termine di ricerca non è stato specificato, mostra tutti gli aerei
    $stmt = $conn->query("SELECT * FROM aerei");
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?><?php
session_start();

if (!isset($_SESSION['orderData'])) {
    header("Location: ordinazione.php");
    exit();
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aereiDB";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connessione al database fallita: " . $e->getMessage();
    die();
}

// Verifica se è stato inviato un termine di ricerca
if (isset($_POST['search'])) {
    $searchTerm = $_POST['search'];

    // Query per recuperare i dati degli aerei con il termine di ricerca
    $stmt = $conn->prepare("SELECT * FROM aerei WHERE Marca LIKE :searchTerm OR Modello LIKE :searchTerm");
    $stmt->bindValue(':searchTerm', '%' . $searchTerm . '%', PDO::PARAM_STR);
    $stmt->execute();
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
} else {
    // Se il termine di ricerca non è stato specificato, mostra tutti gli aerei
    $stmt = $conn->query("SELECT * FROM aerei");
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?><?php
session_start();

if (!isset($_SESSION['orderData'])) {
    header("Location: ordinazione.php");
    exit();
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aereiDB";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connessione al database fallita: " . $e->getMessage();
    die();
}

// Verifica se è stato inviato un termine di ricerca
if (isset($_POST['search'])) {
    $searchTerm = $_POST['search'];

    // Query per recuperare i dati degli aerei con il termine di ricerca
    $stmt = $conn->prepare("SELECT * FROM aerei WHERE Marca LIKE :searchTerm OR Modello LIKE :searchTerm");
    $stmt->bindValue(':searchTerm', '%' . $searchTerm . '%', PDO::PARAM_STR);
    $stmt->execute();
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
} else {
    // Se il termine di ricerca non è stato specificato, mostra tutti gli aerei
    $stmt = $conn->query("SELECT * FROM aerei");
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?><?php
session_start();

if (!isset($_SESSION['orderData'])) {
    header("Location: ordinazione.php");
    exit();
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aereiDB";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connessione al database fallita: " . $e->getMessage();
    die();
}

// Verifica se è stato inviato un termine di ricerca
if (isset($_POST['search'])) {
    $searchTerm = $_POST['search'];

    // Query per recuperare i dati degli aerei con il termine di ricerca
    $stmt = $conn->prepare("SELECT * FROM aerei WHERE Marca LIKE :searchTerm OR Modello LIKE :searchTerm");
    $stmt->bindValue(':searchTerm', '%' . $searchTerm . '%', PDO::PARAM_STR);
    $stmt->execute();
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
} else {
    // Se il termine di ricerca non è stato specificato, mostra tutti gli aerei
    $stmt = $conn->query("SELECT * FROM aerei");
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?><?php
session_start();

if (!isset($_SESSION['orderData'])) {
    header("Location: ordinazione.php");
    exit();
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aereiDB";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connessione al database fallita: " . $e->getMessage();
    die();
}

// Verifica se è stato inviato un termine di ricerca
if (isset($_POST['search'])) {
    $searchTerm = $_POST['search'];

    // Query per recuperare i dati degli aerei con il termine di ricerca
    $stmt = $conn->prepare("SELECT * FROM aerei WHERE Marca LIKE :searchTerm OR Modello LIKE :searchTerm");
    $stmt->bindValue(':searchTerm', '%' . $searchTerm . '%', PDO::PARAM_STR);
    $stmt->execute();
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
} else {
    // Se il termine di ricerca non è stato specificato, mostra tutti gli aerei
    $stmt = $conn->query("SELECT * FROM aerei");
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?><?php
session_start();

if (!isset($_SESSION['orderData'])) {
    header("Location: ordinazione.php");
    exit();
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aereiDB";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connessione al database fallita: " . $e->getMessage();
    die();
}

// Verifica se è stato inviato un termine di ricerca
if (isset($_POST['search'])) {
    $searchTerm = $_POST['search'];

    // Query per recuperare i dati degli aerei con il termine di ricerca
    $stmt = $conn->prepare("SELECT * FROM aerei WHERE Marca LIKE :searchTerm OR Modello LIKE :searchTerm");
    $stmt->bindValue(':searchTerm', '%' . $searchTerm . '%', PDO::PARAM_STR);
    $stmt->execute();
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
} else {
    // Se il termine di ricerca non è stato specificato, mostra tutti gli aerei
    $stmt = $conn->query("SELECT * FROM aerei");
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?><?php
session_start();

if (!isset($_SESSION['orderData'])) {
    header("Location: ordinazione.php");
    exit();
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aereiDB";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connessione al database fallita: " . $e->getMessage();
    die();
}

// Verifica se è stato inviato un termine di ricerca
if (isset($_POST['search'])) {
    $searchTerm = $_POST['search'];

    // Query per recuperare i dati degli aerei con il termine di ricerca
    $stmt = $conn->prepare("SELECT * FROM aerei WHERE Marca LIKE :searchTerm OR Modello LIKE :searchTerm");
    $stmt->bindValue(':searchTerm', '%' . $searchTerm . '%', PDO::PARAM_STR);
    $stmt->execute();
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
} else {
    // Se il termine di ricerca non è stato specificato, mostra tutti gli aerei
    $stmt = $conn->query("SELECT * FROM aerei");
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?><?php
session_start();

if (!isset($_SESSION['orderData'])) {
    header("Location: ordinazione.php");
    exit();
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aereiDB";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connessione al database fallita: " . $e->getMessage();
    die();
}

// Verifica se è stato inviato un termine di ricerca
if (isset($_POST['search'])) {
    $searchTerm = $_POST['search'];

    // Query per recuperare i dati degli aerei con il termine di ricerca
    $stmt = $conn->prepare("SELECT * FROM aerei WHERE Marca LIKE :searchTerm OR Modello LIKE :searchTerm");
    $stmt->bindValue(':searchTerm', '%' . $searchTerm . '%', PDO::PARAM_STR);
    $stmt->execute();
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
} else {
    // Se il termine di ricerca non è stato specificato, mostra tutti gli aerei
    $stmt = $conn->query("SELECT * FROM aerei");
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?><?php
session_start();

if (!isset($_SESSION['orderData'])) {
    header("Location: ordinazione.php");
    exit();
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aereiDB";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connessione al database fallita: " . $e->getMessage();
    die();
}

// Verifica se è stato inviato un termine di ricerca
if (isset($_POST['search'])) {
    $searchTerm = $_POST['search'];

    // Query per recuperare i dati degli aerei con il termine di ricerca
    $stmt = $conn->prepare("SELECT * FROM aerei WHERE Marca LIKE :searchTerm OR Modello LIKE :searchTerm");
    $stmt->bindValue(':searchTerm', '%' . $searchTerm . '%', PDO::PARAM_STR);
    $stmt->execute();
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
} else {
    // Se il termine di ricerca non è stato specificato, mostra tutti gli aerei
    $stmt = $conn->query("SELECT * FROM aerei");
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?><?php
session_start();

if (!isset($_SESSION['orderData'])) {
    header("Location: ordinazione.php");
    exit();
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aereiDB";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connessione al database fallita: " . $e->getMessage();
    die();
}

// Verifica se è stato inviato un termine di ricerca
if (isset($_POST['search'])) {
    $searchTerm = $_POST['search'];

    // Query per recuperare i dati degli aerei con il termine di ricerca
    $stmt = $conn->prepare("SELECT * FROM aerei WHERE Marca LIKE :searchTerm OR Modello LIKE :searchTerm");
    $stmt->bindValue(':searchTerm', '%' . $searchTerm . '%', PDO::PARAM_STR);
    $stmt->execute();
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
} else {
    // Se il termine di ricerca non è stato specificato, mostra tutti gli aerei
    $stmt = $conn->query("SELECT * FROM aerei");
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?><?php
session_start();

if (!isset($_SESSION['orderData'])) {
    header("Location: ordinazione.php");
    exit();
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aereiDB";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connessione al database fallita: " . $e->getMessage();
    die();
}

// Verifica se è stato inviato un termine di ricerca
if (isset($_POST['search'])) {
    $searchTerm = $_POST['search'];

    // Query per recuperare i dati degli aerei con il termine di ricerca
    $stmt = $conn->prepare("SELECT * FROM aerei WHERE Marca LIKE :searchTerm OR Modello LIKE :searchTerm");
    $stmt->bindValue(':searchTerm', '%' . $searchTerm . '%', PDO::PARAM_STR);
    $stmt->execute();
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
} else {
    // Se il termine di ricerca non è stato specificato, mostra tutti gli aerei
    $stmt = $conn->query("SELECT * FROM aerei");
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?><?php
session_start();

if (!isset($_SESSION['orderData'])) {
    header("Location: ordinazione.php");
    exit();
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aereiDB";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connessione al database fallita: " . $e->getMessage();
    die();
}

// Verifica se è stato inviato un termine di ricerca
if (isset($_POST['search'])) {
    $searchTerm = $_POST['search'];

    // Query per recuperare i dati degli aerei con il termine di ricerca
    $stmt = $conn->prepare("SELECT * FROM aerei WHERE Marca LIKE :searchTerm OR Modello LIKE :searchTerm");
    $stmt->bindValue(':searchTerm', '%' . $searchTerm . '%', PDO::PARAM_STR);
    $stmt->execute();
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
} else {
    // Se il termine di ricerca non è stato specificato, mostra tutti gli aerei
    $stmt = $conn->query("SELECT * FROM aerei");
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?><?php
session_start();

if (!isset($_SESSION['orderData'])) {
    header("Location: ordinazione.php");
    exit();
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aereiDB";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connessione al database fallita: " . $e->getMessage();
    die();
}

// Verifica se è stato inviato un termine di ricerca
if (isset($_POST['search'])) {
    $searchTerm = $_POST['search'];

    // Query per recuperare i dati degli aerei con il termine di ricerca
    $stmt = $conn->prepare("SELECT * FROM aerei WHERE Marca LIKE :searchTerm OR Modello LIKE :searchTerm");
    $stmt->bindValue(':searchTerm', '%' . $searchTerm . '%', PDO::PARAM_STR);
    $stmt->execute();
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
} else {
    // Se il termine di ricerca non è stato specificato, mostra tutti gli aerei
    $stmt = $conn->query("SELECT * FROM aerei");
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?><?php
session_start();

if (!isset($_SESSION['orderData'])) {
    header("Location: ordinazione.php");
    exit();
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aereiDB";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connessione al database fallita: " . $e->getMessage();
    die();
}

// Verifica se è stato inviato un termine di ricerca
if (isset($_POST['search'])) {
    $searchTerm = $_POST['search'];

    // Query per recuperare i dati degli aerei con il termine di ricerca
    $stmt = $conn->prepare("SELECT * FROM aerei WHERE Marca LIKE :searchTerm OR Modello LIKE :searchTerm");
    $stmt->bindValue(':searchTerm', '%' . $searchTerm . '%', PDO::PARAM_STR);
    $stmt->execute();
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
} else {
    // Se il termine di ricerca non è stato specificato, mostra tutti gli aerei
    $stmt = $conn->query("SELECT * FROM aerei");
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?><?php
session_start();

if (!isset($_SESSION['orderData'])) {
    header("Location: ordinazione.php");
    exit();
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aereiDB";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connessione al database fallita: " . $e->getMessage();
    die();
}

// Verifica se è stato inviato un termine di ricerca
if (isset($_POST['search'])) {
    $searchTerm = $_POST['search'];

    // Query per recuperare i dati degli aerei con il termine di ricerca
    $stmt = $conn->prepare("SELECT * FROM aerei WHERE Marca LIKE :searchTerm OR Modello LIKE :searchTerm");
    $stmt->bindValue(':searchTerm', '%' . $searchTerm . '%', PDO::PARAM_STR);
    $stmt->execute();
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
} else {
    // Se il termine di ricerca non è stato specificato, mostra tutti gli aerei
    $stmt = $conn->query("SELECT * FROM aerei");
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?><?php
session_start();

if (!isset($_SESSION['orderData'])) {
    header("Location: ordinazione.php");
    exit();
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aereiDB";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connessione al database fallita: " . $e->getMessage();
    die();
}

// Verifica se è stato inviato un termine di ricerca
if (isset($_POST['search'])) {
    $searchTerm = $_POST['search'];

    // Query per recuperare i dati degli aerei con il termine di ricerca
    $stmt = $conn->prepare("SELECT * FROM aerei WHERE Marca LIKE :searchTerm OR Modello LIKE :searchTerm");
    $stmt->bindValue(':searchTerm', '%' . $searchTerm . '%', PDO::PARAM_STR);
    $stmt->execute();
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
} else {
    // Se il termine di ricerca non è stato specificato, mostra tutti gli aerei
    $stmt = $conn->query("SELECT * FROM aerei");
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?><?php
session_start();

if (!isset($_SESSION['orderData'])) {
    header("Location: ordinazione.php");
    exit();
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aereiDB";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connessione al database fallita: " . $e->getMessage();
    die();
}

// Verifica se è stato inviato un termine di ricerca
if (isset($_POST['search'])) {
    $searchTerm = $_POST['search'];

    // Query per recuperare i dati degli aerei con il termine di ricerca
    $stmt = $conn->prepare("SELECT * FROM aerei WHERE Marca LIKE :searchTerm OR Modello LIKE :searchTerm");
    $stmt->bindValue(':searchTerm', '%' . $searchTerm . '%', PDO::PARAM_STR);
    $stmt->execute();
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
} else {
    // Se il termine di ricerca non è stato specificato, mostra tutti gli aerei
    $stmt = $conn->query("SELECT * FROM aerei");
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?><?php
session_start();

if (!isset($_SESSION['orderData'])) {
    header("Location: ordinazione.php");
    exit();
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aereiDB";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connessione al database fallita: " . $e->getMessage();
    die();
}

// Verifica se è stato inviato un termine di ricerca
if (isset($_POST['search'])) {
    $searchTerm = $_POST['search'];

    // Query per recuperare i dati degli aerei con il termine di ricerca
    $stmt = $conn->prepare("SELECT * FROM aerei WHERE Marca LIKE :searchTerm OR Modello LIKE :searchTerm");
    $stmt->bindValue(':searchTerm', '%' . $searchTerm . '%', PDO::PARAM_STR);
    $stmt->execute();
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
} else {
    // Se il termine di ricerca non è stato specificato, mostra tutti gli aerei
    $stmt = $conn->query("SELECT * FROM aerei");
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?><?php
session_start();

if (!isset($_SESSION['orderData'])) {
    header("Location: ordinazione.php");
    exit();
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aereiDB";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connessione al database fallita: " . $e->getMessage();
    die();
}

// Verifica se è stato inviato un termine di ricerca
if (isset($_POST['search'])) {
    $searchTerm = $_POST['search'];

    // Query per recuperare i dati degli aerei con il termine di ricerca
    $stmt = $conn->prepare("SELECT * FROM aerei WHERE Marca LIKE :searchTerm OR Modello LIKE :searchTerm");
    $stmt->bindValue(':searchTerm', '%' . $searchTerm . '%', PDO::PARAM_STR);
    $stmt->execute();
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
} else {
    // Se il termine di ricerca non è stato specificato, mostra tutti gli aerei
    $stmt = $conn->query("SELECT * FROM aerei");
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?><?php
session_start();

if (!isset($_SESSION['orderData'])) {
    header("Location: ordinazione.php");
    exit();
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aereiDB";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connessione al database fallita: " . $e->getMessage();
    die();
}

// Verifica se è stato inviato un termine di ricerca
if (isset($_POST['search'])) {
    $searchTerm = $_POST['search'];

    // Query per recuperare i dati degli aerei con il termine di ricerca
    $stmt = $conn->prepare("SELECT * FROM aerei WHERE Marca LIKE :searchTerm OR Modello LIKE :searchTerm");
    $stmt->bindValue(':searchTerm', '%' . $searchTerm . '%', PDO::PARAM_STR);
    $stmt->execute();
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
} else {
    // Se il termine di ricerca non è stato specificato, mostra tutti gli aerei
    $stmt = $conn->query("SELECT * FROM aerei");
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?><?php
session_start();

if (!isset($_SESSION['orderData'])) {
    header("Location: ordinazione.php");
    exit();
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aereiDB";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connessione al database fallita: " . $e->getMessage();
    die();
}

// Verifica se è stato inviato un termine di ricerca
if (isset($_POST['search'])) {
    $searchTerm = $_POST['search'];

    // Query per recuperare i dati degli aerei con il termine di ricerca
    $stmt = $conn->prepare("SELECT * FROM aerei WHERE Marca LIKE :searchTerm OR Modello LIKE :searchTerm");
    $stmt->bindValue(':searchTerm', '%' . $searchTerm . '%', PDO::PARAM_STR);
    $stmt->execute();
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
} else {
    // Se il termine di ricerca non è stato specificato, mostra tutti gli aerei
    $stmt = $conn->query("SELECT * FROM aerei");
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?><?php
session_start();

if (!isset($_SESSION['orderData'])) {
    header("Location: ordinazione.php");
    exit();
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aereiDB";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connessione al database fallita: " . $e->getMessage();
    die();
}

// Verifica se è stato inviato un termine di ricerca
if (isset($_POST['search'])) {
    $searchTerm = $_POST['search'];

    // Query per recuperare i dati degli aerei con il termine di ricerca
    $stmt = $conn->prepare("SELECT * FROM aerei WHERE Marca LIKE :searchTerm OR Modello LIKE :searchTerm");
    $stmt->bindValue(':searchTerm', '%' . $searchTerm . '%', PDO::PARAM_STR);
    $stmt->execute();
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
} else {
    // Se il termine di ricerca non è stato specificato, mostra tutti gli aerei
    $stmt = $conn->query("SELECT * FROM aerei");
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?><?php
session_start();

if (!isset($_SESSION['orderData'])) {
    header("Location: ordinazione.php");
    exit();
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aereiDB";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connessione al database fallita: " . $e->getMessage();
    die();
}

// Verifica se è stato inviato un termine di ricerca
if (isset($_POST['search'])) {
    $searchTerm = $_POST['search'];

    // Query per recuperare i dati degli aerei con il termine di ricerca
    $stmt = $conn->prepare("SELECT * FROM aerei WHERE Marca LIKE :searchTerm OR Modello LIKE :searchTerm");
    $stmt->bindValue(':searchTerm', '%' . $searchTerm . '%', PDO::PARAM_STR);
    $stmt->execute();
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
} else {
    // Se il termine di ricerca non è stato specificato, mostra tutti gli aerei
    $stmt = $conn->query("SELECT * FROM aerei");
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?><?php
session_start();

if (!isset($_SESSION['orderData'])) {
    header("Location: ordinazione.php");
    exit();
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aereiDB";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connessione al database fallita: " . $e->getMessage();
    die();
}

// Verifica se è stato inviato un termine di ricerca
if (isset($_POST['search'])) {
    $searchTerm = $_POST['search'];

    // Query per recuperare i dati degli aerei con il termine di ricerca
    $stmt = $conn->prepare("SELECT * FROM aerei WHERE Marca LIKE :searchTerm OR Modello LIKE :searchTerm");
    $stmt->bindValue(':searchTerm', '%' . $searchTerm . '%', PDO::PARAM_STR);
    $stmt->execute();
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
} else {
    // Se il termine di ricerca non è stato specificato, mostra tutti gli aerei
    $stmt = $conn->query("SELECT * FROM aerei");
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?><?php
session_start();

if (!isset($_SESSION['orderData'])) {
    header("Location: ordinazione.php");
    exit();
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aereiDB";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connessione al database fallita: " . $e->getMessage();
    die();
}

// Verifica se è stato inviato un termine di ricerca
if (isset($_POST['search'])) {
    $searchTerm = $_POST['search'];

    // Query per recuperare i dati degli aerei con il termine di ricerca
    $stmt = $conn->prepare("SELECT * FROM aerei WHERE Marca LIKE :searchTerm OR Modello LIKE :searchTerm");
    $stmt->bindValue(':searchTerm', '%' . $searchTerm . '%', PDO::PARAM_STR);
    $stmt->execute();
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
} else {
    // Se il termine di ricerca non è stato specificato, mostra tutti gli aerei
    $stmt = $conn->query("SELECT * FROM aerei");
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?><?php
session_start();

if (!isset($_SESSION['orderData'])) {
    header("Location: ordinazione.php");
    exit();
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aereiDB";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connessione al database fallita: " . $e->getMessage();
    die();
}

// Verifica se è stato inviato un termine di ricerca
if (isset($_POST['search'])) {
    $searchTerm = $_POST['search'];

    // Query per recuperare i dati degli aerei con il termine di ricerca
    $stmt = $conn->prepare("SELECT * FROM aerei WHERE Marca LIKE :searchTerm OR Modello LIKE :searchTerm");
    $stmt->bindValue(':searchTerm', '%' . $searchTerm . '%', PDO::PARAM_STR);
    $stmt->execute();
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
} else {
    // Se il termine di ricerca non è stato specificato, mostra tutti gli aerei
    $stmt = $conn->query("SELECT * FROM aerei");
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?><?php
session_start();

if (!isset($_SESSION['orderData'])) {
    header("Location: ordinazione.php");
    exit();
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aereiDB";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connessione al database fallita: " . $e->getMessage();
    die();
}

// Verifica se è stato inviato un termine di ricerca
if (isset($_POST['search'])) {
    $searchTerm = $_POST['search'];

    // Query per recuperare i dati degli aerei con il termine di ricerca
    $stmt = $conn->prepare("SELECT * FROM aerei WHERE Marca LIKE :searchTerm OR Modello LIKE :searchTerm");
    $stmt->bindValue(':searchTerm', '%' . $searchTerm . '%', PDO::PARAM_STR);
    $stmt->execute();
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
} else {
    // Se il termine di ricerca non è stato specificato, mostra tutti gli aerei
    $stmt = $conn->query("SELECT * FROM aerei");
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?><?php
session_start();

if (!isset($_SESSION['orderData'])) {
    header("Location: ordinazione.php");
    exit();
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aereiDB";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connessione al database fallita: " . $e->getMessage();
    die();
}

// Verifica se è stato inviato un termine di ricerca
if (isset($_POST['search'])) {
    $searchTerm = $_POST['search'];

    // Query per recuperare i dati degli aerei con il termine di ricerca
    $stmt = $conn->prepare("SELECT * FROM aerei WHERE Marca LIKE :searchTerm OR Modello LIKE :searchTerm");
    $stmt->bindValue(':searchTerm', '%' . $searchTerm . '%', PDO::PARAM_STR);
    $stmt->execute();
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
} else {
    // Se il termine di ricerca non è stato specificato, mostra tutti gli aerei
    $stmt = $conn->query("SELECT * FROM aerei");
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?><?php
session_start();

if (!isset($_SESSION['orderData'])) {
    header("Location: ordinazione.php");
    exit();
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aereiDB";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connessione al database fallita: " . $e->getMessage();
    die();
}

// Verifica se è stato inviato un termine di ricerca
if (isset($_POST['search'])) {
    $searchTerm = $_POST['search'];

    // Query per recuperare i dati degli aerei con il termine di ricerca
    $stmt = $conn->prepare("SELECT * FROM aerei WHERE Marca LIKE :searchTerm OR Modello LIKE :searchTerm");
    $stmt->bindValue(':searchTerm', '%' . $searchTerm . '%', PDO::PARAM_STR);
    $stmt->execute();
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
} else {
    // Se il termine di ricerca non è stato specificato, mostra tutti gli aerei
    $stmt = $conn->query("SELECT * FROM aerei");
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?><?php
session_start();

if (!isset($_SESSION['orderData'])) {
    header("Location: ordinazione.php");
    exit();
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aereiDB";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connessione al database fallita: " . $e->getMessage();
    die();
}

// Verifica se è stato inviato un termine di ricerca
if (isset($_POST['search'])) {
    $searchTerm = $_POST['search'];

    // Query per recuperare i dati degli aerei con il termine di ricerca
    $stmt = $conn->prepare("SELECT * FROM aerei WHERE Marca LIKE :searchTerm OR Modello LIKE :searchTerm");
    $stmt->bindValue(':searchTerm', '%' . $searchTerm . '%', PDO::PARAM_STR);
    $stmt->execute();
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
} else {
    // Se il termine di ricerca non è stato specificato, mostra tutti gli aerei
    $stmt = $conn->query("SELECT * FROM aerei");
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?><?php
session_start();

if (!isset($_SESSION['orderData'])) {
    header("Location: ordinazione.php");
    exit();
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aereiDB";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connessione al database fallita: " . $e->getMessage();
    die();
}

// Verifica se è stato inviato un termine di ricerca
if (isset($_POST['search'])) {
    $searchTerm = $_POST['search'];

    // Query per recuperare i dati degli aerei con il termine di ricerca
    $stmt = $conn->prepare("SELECT * FROM aerei WHERE Marca LIKE :searchTerm OR Modello LIKE :searchTerm");
    $stmt->bindValue(':searchTerm', '%' . $searchTerm . '%', PDO::PARAM_STR);
    $stmt->execute();
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
} else {
    // Se il termine di ricerca non è stato specificato, mostra tutti gli aerei
    $stmt = $conn->query("SELECT * FROM aerei");
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?><?php
session_start();

if (!isset($_SESSION['orderData'])) {
    header("Location: ordinazione.php");
    exit();
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aereiDB";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connessione al database fallita: " . $e->getMessage();
    die();
}

// Verifica se è stato inviato un termine di ricerca
if (isset($_POST['search'])) {
    $searchTerm = $_POST['search'];

    // Query per recuperare i dati degli aerei con il termine di ricerca
    $stmt = $conn->prepare("SELECT * FROM aerei WHERE Marca LIKE :searchTerm OR Modello LIKE :searchTerm");
    $stmt->bindValue(':searchTerm', '%' . $searchTerm . '%', PDO::PARAM_STR);
    $stmt->execute();
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
} else {
    // Se il termine di ricerca non è stato specificato, mostra tutti gli aerei
    $stmt = $conn->query("SELECT * FROM aerei");
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?><?php
session_start();

if (!isset($_SESSION['orderData'])) {
    header("Location: ordinazione.php");
    exit();
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aereiDB";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connessione al database fallita: " . $e->getMessage();
    die();
}

// Verifica se è stato inviato un termine di ricerca
if (isset($_POST['search'])) {
    $searchTerm = $_POST['search'];

    // Query per recuperare i dati degli aerei con il termine di ricerca
    $stmt = $conn->prepare("SELECT * FROM aerei WHERE Marca LIKE :searchTerm OR Modello LIKE :searchTerm");
    $stmt->bindValue(':searchTerm', '%' . $searchTerm . '%', PDO::PARAM_STR);
    $stmt->execute();
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
} else {
    // Se il termine di ricerca non è stato specificato, mostra tutti gli aerei
    $stmt = $conn->query("SELECT * FROM aerei");
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?><?php
session_start();

if (!isset($_SESSION['orderData'])) {
    header("Location: ordinazione.php");
    exit();
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aereiDB";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connessione al database fallita: " . $e->getMessage();
    die();
}

// Verifica se è stato inviato un termine di ricerca
if (isset($_POST['search'])) {
    $searchTerm = $_POST['search'];

    // Query per recuperare i dati degli aerei con il termine di ricerca
    $stmt = $conn->prepare("SELECT * FROM aerei WHERE Marca LIKE :searchTerm OR Modello LIKE :searchTerm");
    $stmt->bindValue(':searchTerm', '%' . $searchTerm . '%', PDO::PARAM_STR);
    $stmt->execute();
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
} else {
    // Se il termine di ricerca non è stato specificato, mostra tutti gli aerei
    $stmt = $conn->query("SELECT * FROM aerei");
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?><?php
session_start();

if (!isset($_SESSION['orderData'])) {
    header("Location: ordinazione.php");
    exit();
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aereiDB";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connessione al database fallita: " . $e->getMessage();
    die();
}

// Verifica se è stato inviato un termine di ricerca
if (isset($_POST['search'])) {
    $searchTerm = $_POST['search'];

    // Query per recuperare i dati degli aerei con il termine di ricerca
    $stmt = $conn->prepare("SELECT * FROM aerei WHERE Marca LIKE :searchTerm OR Modello LIKE :searchTerm");
    $stmt->bindValue(':searchTerm', '%' . $searchTerm . '%', PDO::PARAM_STR);
    $stmt->execute();
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
} else {
    // Se il termine di ricerca non è stato specificato, mostra tutti gli aerei
    $stmt = $conn->query("SELECT * FROM aerei");
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?><?php
session_start();

if (!isset($_SESSION['orderData'])) {
    header("Location: ordinazione.php");
    exit();
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aereiDB";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connessione al database fallita: " . $e->getMessage();
    die();
}

// Verifica se è stato inviato un termine di ricerca
if (isset($_POST['search'])) {
    $searchTerm = $_POST['search'];

    // Query per recuperare i dati degli aerei con il termine di ricerca
    $stmt = $conn->prepare("SELECT * FROM aerei WHERE Marca LIKE :searchTerm OR Modello LIKE :searchTerm");
    $stmt->bindValue(':searchTerm', '%' . $searchTerm . '%', PDO::PARAM_STR);
    $stmt->execute();
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
} else {
    // Se il termine di ricerca non è stato specificato, mostra tutti gli aerei
    $stmt = $conn->query("SELECT * FROM aerei");
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?><?php
session_start();

if (!isset($_SESSION['orderData'])) {
    header("Location: ordinazione.php");
    exit();
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aereiDB";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connessione al database fallita: " . $e->getMessage();
    die();
}

// Verifica se è stato inviato un termine di ricerca
if (isset($_POST['search'])) {
    $searchTerm = $_POST['search'];

    // Query per recuperare i dati degli aerei con il termine di ricerca
    $stmt = $conn->prepare("SELECT * FROM aerei WHERE Marca LIKE :searchTerm OR Modello LIKE :searchTerm");
    $stmt->bindValue(':searchTerm', '%' . $searchTerm . '%', PDO::PARAM_STR);
    $stmt->execute();
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
} else {
    // Se il termine di ricerca non è stato specificato, mostra tutti gli aerei
    $stmt = $conn->query("SELECT * FROM aerei");
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?><?php
session_start();

if (!isset($_SESSION['orderData'])) {
    header("Location: ordinazione.php");
    exit();
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aereiDB";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connessione al database fallita: " . $e->getMessage();
    die();
}

// Verifica se è stato inviato un termine di ricerca
if (isset($_POST['search'])) {
    $searchTerm = $_POST['search'];

    // Query per recuperare i dati degli aerei con il termine di ricerca
    $stmt = $conn->prepare("SELECT * FROM aerei WHERE Marca LIKE :searchTerm OR Modello LIKE :searchTerm");
    $stmt->bindValue(':searchTerm', '%' . $searchTerm . '%', PDO::PARAM_STR);
    $stmt->execute();
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
} else {
    // Se il termine di ricerca non è stato specificato, mostra tutti gli aerei
    $stmt = $conn->query("SELECT * FROM aerei");
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?><?php
session_start();

if (!isset($_SESSION['orderData'])) {
    header("Location: ordinazione.php");
    exit();
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aereiDB";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connessione al database fallita: " . $e->getMessage();
    die();
}

// Verifica se è stato inviato un termine di ricerca
if (isset($_POST['search'])) {
    $searchTerm = $_POST['search'];

    // Query per recuperare i dati degli aerei con il termine di ricerca
    $stmt = $conn->prepare("SELECT * FROM aerei WHERE Marca LIKE :searchTerm OR Modello LIKE :searchTerm");
    $stmt->bindValue(':searchTerm', '%' . $searchTerm . '%', PDO::PARAM_STR);
    $stmt->execute();
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
} else {
    // Se il termine di ricerca non è stato specificato, mostra tutti gli aerei
    $stmt = $conn->query("SELECT * FROM aerei");
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?><?php
session_start();

if (!isset($_SESSION['orderData'])) {
    header("Location: ordinazione.php");
    exit();
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aereiDB";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connessione al database fallita: " . $e->getMessage();
    die();
}

// Verifica se è stato inviato un termine di ricerca
if (isset($_POST['search'])) {
    $searchTerm = $_POST['search'];

    // Query per recuperare i dati degli aerei con il termine di ricerca
    $stmt = $conn->prepare("SELECT * FROM aerei WHERE Marca LIKE :searchTerm OR Modello LIKE :searchTerm");
    $stmt->bindValue(':searchTerm', '%' . $searchTerm . '%', PDO::PARAM_STR);
    $stmt->execute();
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
} else {
    // Se il termine di ricerca non è stato specificato, mostra tutti gli aerei
    $stmt = $conn->query("SELECT * FROM aerei");
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?><?php
session_start();

if (!isset($_SESSION['orderData'])) {
    header("Location: ordinazione.php");
    exit();
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aereiDB";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connessione al database fallita: " . $e->getMessage();
    die();
}

// Verifica se è stato inviato un termine di ricerca
if (isset($_POST['search'])) {
    $searchTerm = $_POST['search'];

    // Query per recuperare i dati degli aerei con il termine di ricerca
    $stmt = $conn->prepare("SELECT * FROM aerei WHERE Marca LIKE :searchTerm OR Modello LIKE :searchTerm");
    $stmt->bindValue(':searchTerm', '%' . $searchTerm . '%', PDO::PARAM_STR);
    $stmt->execute();
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
} else {
    // Se il termine di ricerca non è stato specificato, mostra tutti gli aerei
    $stmt = $conn->query("SELECT * FROM aerei");
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?><?php
session_start();

if (!isset($_SESSION['orderData'])) {
    header("Location: ordinazione.php");
    exit();
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aereiDB";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connessione al database fallita: " . $e->getMessage();
    die();
}

// Verifica se è stato inviato un termine di ricerca
if (isset($_POST['search'])) {
    $searchTerm = $_POST['search'];

    // Query per recuperare i dati degli aerei con il termine di ricerca
    $stmt = $conn->prepare("SELECT * FROM aerei WHERE Marca LIKE :searchTerm OR Modello LIKE :searchTerm");
    $stmt->bindValue(':searchTerm', '%' . $searchTerm . '%', PDO::PARAM_STR);
    $stmt->execute();
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
} else {
    // Se il termine di ricerca non è stato specificato, mostra tutti gli aerei
    $stmt = $conn->query("SELECT * FROM aerei");
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?><?php
session_start();

if (!isset($_SESSION['orderData'])) {
    header("Location: ordinazione.php");
    exit();
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aereiDB";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connessione al database fallita: " . $e->getMessage();
    die();
}

// Verifica se è stato inviato un termine di ricerca
if (isset($_POST['search'])) {
    $searchTerm = $_POST['search'];

    // Query per recuperare i dati degli aerei con il termine di ricerca
    $stmt = $conn->prepare("SELECT * FROM aerei WHERE Marca LIKE :searchTerm OR Modello LIKE :searchTerm");
    $stmt->bindValue(':searchTerm', '%' . $searchTerm . '%', PDO::PARAM_STR);
    $stmt->execute();
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
} else {
    // Se il termine di ricerca non è stato specificato, mostra tutti gli aerei
    $stmt = $conn->query("SELECT * FROM aerei");
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?><?php
session_start();

if (!isset($_SESSION['orderData'])) {
    header("Location: ordinazione.php");
    exit();
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aereiDB";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connessione al database fallita: " . $e->getMessage();
    die();
}

// Verifica se è stato inviato un termine di ricerca
if (isset($_POST['search'])) {
    $searchTerm = $_POST['search'];

    // Query per recuperare i dati degli aerei con il termine di ricerca
    $stmt = $conn->prepare("SELECT * FROM aerei WHERE Marca LIKE :searchTerm OR Modello LIKE :searchTerm");
    $stmt->bindValue(':searchTerm', '%' . $searchTerm . '%', PDO::PARAM_STR);
    $stmt->execute();
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
} else {
    // Se il termine di ricerca non è stato specificato, mostra tutti gli aerei
    $stmt = $conn->query("SELECT * FROM aerei");
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?><?php
session_start();

if (!isset($_SESSION['orderData'])) {
    header("Location: ordinazione.php");
    exit();
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aereiDB";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connessione al database fallita: " . $e->getMessage();
    die();
}

// Verifica se è stato inviato un termine di ricerca
if (isset($_POST['search'])) {
    $searchTerm = $_POST['search'];

    // Query per recuperare i dati degli aerei con il termine di ricerca
    $stmt = $conn->prepare("SELECT * FROM aerei WHERE Marca LIKE :searchTerm OR Modello LIKE :searchTerm");
    $stmt->bindValue(':searchTerm', '%' . $searchTerm . '%', PDO::PARAM_STR);
    $stmt->execute();
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
} else {
    // Se il termine di ricerca non è stato specificato, mostra tutti gli aerei
    $stmt = $conn->query("SELECT * FROM aerei");
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?><?php
session_start();

if (!isset($_SESSION['orderData'])) {
    header("Location: ordinazione.php");
    exit();
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aereiDB";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connessione al database fallita: " . $e->getMessage();
    die();
}

// Verifica se è stato inviato un termine di ricerca
if (isset($_POST['search'])) {
    $searchTerm = $_POST['search'];

    // Query per recuperare i dati degli aerei con il termine di ricerca
    $stmt = $conn->prepare("SELECT * FROM aerei WHERE Marca LIKE :searchTerm OR Modello LIKE :searchTerm");
    $stmt->bindValue(':searchTerm', '%' . $searchTerm . '%', PDO::PARAM_STR);
    $stmt->execute();
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
} else {
    // Se il termine di ricerca non è stato specificato, mostra tutti gli aerei
    $stmt = $conn->query("SELECT * FROM aerei");
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?><?php
session_start();

if (!isset($_SESSION['orderData'])) {
    header("Location: ordinazione.php");
    exit();
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aereiDB";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connessione al database fallita: " . $e->getMessage();
    die();
}

// Verifica se è stato inviato un termine di ricerca
if (isset($_POST['search'])) {
    $searchTerm = $_POST['search'];

    // Query per recuperare i dati degli aerei con il termine di ricerca
    $stmt = $conn->prepare("SELECT * FROM aerei WHERE Marca LIKE :searchTerm OR Modello LIKE :searchTerm");
    $stmt->bindValue(':searchTerm', '%' . $searchTerm . '%', PDO::PARAM_STR);
    $stmt->execute();
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
} else {
    // Se il termine di ricerca non è stato specificato, mostra tutti gli aerei
    $stmt = $conn->query("SELECT * FROM aerei");
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?><?php
session_start();

if (!isset($_SESSION['orderData'])) {
    header("Location: ordinazione.php");
    exit();
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aereiDB";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connessione al database fallita: " . $e->getMessage();
    die();
}

// Verifica se è stato inviato un termine di ricerca
if (isset($_POST['search'])) {
    $searchTerm = $_POST['search'];

    // Query per recuperare i dati degli aerei con il termine di ricerca
    $stmt = $conn->prepare("SELECT * FROM aerei WHERE Marca LIKE :searchTerm OR Modello LIKE :searchTerm");
    $stmt->bindValue(':searchTerm', '%' . $searchTerm . '%', PDO::PARAM_STR);
    $stmt->execute();
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
} else {
    // Se il termine di ricerca non è stato specificato, mostra tutti gli aerei
    $stmt = $conn->query("SELECT * FROM aerei");
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?><?php
session_start();

if (!isset($_SESSION['orderData'])) {
    header("Location: ordinazione.php");
    exit();
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aereiDB";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connessione al database fallita: " . $e->getMessage();
    die();
}

// Verifica se è stato inviato un termine di ricerca
if (isset($_POST['search'])) {
    $searchTerm = $_POST['search'];

    // Query per recuperare i dati degli aerei con il termine di ricerca
    $stmt = $conn->prepare("SELECT * FROM aerei WHERE Marca LIKE :searchTerm OR Modello LIKE :searchTerm");
    $stmt->bindValue(':searchTerm', '%' . $searchTerm . '%', PDO::PARAM_STR);
    $stmt->execute();
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
} else {
    // Se il termine di ricerca non è stato specificato, mostra tutti gli aerei
    $stmt = $conn->query("SELECT * FROM aerei");
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?><?php
session_start();

if (!isset($_SESSION['orderData'])) {
    header("Location: ordinazione.php");
    exit();
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aereiDB";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connessione al database fallita: " . $e->getMessage();
    die();
}

// Verifica se è stato inviato un termine di ricerca
if (isset($_POST['search'])) {
    $searchTerm = $_POST['search'];

    // Query per recuperare i dati degli aerei con il termine di ricerca
    $stmt = $conn->prepare("SELECT * FROM aerei WHERE Marca LIKE :searchTerm OR Modello LIKE :searchTerm");
    $stmt->bindValue(':searchTerm', '%' . $searchTerm . '%', PDO::PARAM_STR);
    $stmt->execute();
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
} else {
    // Se il termine di ricerca non è stato specificato, mostra tutti gli aerei
    $stmt = $conn->query("SELECT * FROM aerei");
    $aerei = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?>