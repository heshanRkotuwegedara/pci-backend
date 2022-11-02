<?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Methods: HEAD, GET, POST, PUT, PATCH, DELETE, OPTIONS");
header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method,Access-Control-Request-Headers, Authorization");
header('Content-Type: application/json');
$method = $_SERVER['REQUEST_METHOD'];
if ($method == "OPTIONS") {
    header('Access-Control-Allow-Origin: *');
    header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method,Access-Control-Request-Headers, Authorization");
    header("HTTP/1.1 200 OK");
    die();
}

require_once __DIR__ . "./../../../../api/services/SiteService.php";

$siteService = new SiteService();
if ($method === 'POST') {
    $data = json_decode(file_get_contents('php://input'));
    if (!empty($data->siteName)) {
        $siteData = new Site($data->siteId, $data->siteName, $data->siteLocation, $data->projectBudet);
        $response = $siteService->addSite($siteData);
        if ($response) {
            echo json_encode(array(
                "message" => "Site created successfully",
                "status" => "success"
            ));
            http_response_code(200);
        } else {
            echo json_encode(array(
                "message" => "Site creation failed",
                "status" => "failed"
            ));
            http_response_code(204);
        }
    } else {
        echo json_encode([
            'status' => -1,
            'message' => 'Required fields are missing' . $data->UserId
        ]);
        http_response_code(400);
    }
} else {
    echo json_encode([
        'status' => -1
    ]);
}