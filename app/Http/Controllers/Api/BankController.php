<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Support\Facades\Neonomics;
use Illuminate\Http\Request;

class BankController extends Controller
{
    public function index(Request $request)
    {
        $token = 'eyJhbGciOiJSUzI1NiIsInR5cCIgOiAiSldUIiwia2lkIiA6ICJ2MmFQNDdIQXVTUi1qWmR5U3otNDVDV2RaOFhiWGFBMXNDbWhLbWtJLXRvIn0.eyJleHAiOjE2NDM4MDk1NjYsImlhdCI6MTY0MzcyMzE2NiwianRpIjoiOTVmMmViOTgtNzFmNi00MmFjLWJhODQtNjg0M2IxNjg4OWQyIiwiaXNzIjoiaHR0cHM6Ly9zYW5kYm94Lm5lb25vbWljcy5pby9hdXRoL3JlYWxtcy9zYW5kYm94Iiwic3ViIjoiZmQ5MDRiMTctM2Y4Ni00NDFhLTkwODEtNmI0MmVhNDU5NjQ5IiwidHlwIjoiQmVhcmVyIiwiYXpwIjoiZjM5YWM5NWYtZjliOC00Y2FkLTkyOWItOTMwMTM2YTc5ZWM0Iiwic2Vzc2lvbl9zdGF0ZSI6IjAyOWU1MDVkLTU4OTMtNGIxMS04MjljLWEzMGY1ZGEyNTM1YSIsImFjciI6IjEiLCJzY29wZSI6Im9wZW5pZCBiYW5xYnJpZGdlX2NsaWVudCIsIm9yZ2FuaXphdGlvbklkIjoiNjY3Y2YyM2ItNDMzOC00OGVhLWIyMjUtMThjOTlkYzJkNjY2IiwiY2xpZW50SWQiOiJmMzlhYzk1Zi1mOWI4LTRjYWQtOTI5Yi05MzAxMzZhNzllYzQiLCJjbGllbnRIb3N0IjoiNTQuODYuNTAuMTM5IiwiY2tpZCI6IjdlYmI5MGE5LTdlNTctNDA0MS05MTc4LWU5YjA3MmQ1MTZiOSIsImNsaWVudEFkZHJlc3MiOiI1NC44Ni41MC4xMzkifQ.DyqqF7geCsKXArdFNe09VlKEQXjXGEMGcp3Oo-rk11QTxVDm8qgiidkHmWWp1Why3oMrHFIXB1Hv64poV4X3MO8zIAUWEk75zUuh9iOjGtlsoDdxfj7NJuoQGPMg2naCF9aLpuVsaz4zu53n9a9Y6kWbQdVA_lr_RIu1ha9emW9SNctPKhlRU_WjNFVOC3boeyCzOBnsBJyhdLvz-SSUHmCVxX6GzLkd95yc_ir-G_ufoJop9FK7r0idGec77J4iUdVLomlGMRNuj12xVtjoJizpwAZ3_hkQGp391cNMLjbApolFuQdDYnQMQ9yLB6_iVjyOJ-bghlSgiTUgA7uUSQ';
        $params = $request->has('countryCode') ? 'countryCode=' . $request->query('countryCode') : ($request->has('name') ? 'name=' . $request->query('name') : (false));
        $data = Neonomics::getBanks($token, $params);
        return $this->responseJson($data);
    }

    public function show($id)
    {
        $token = 'eyJhbGciOiJSUzI1NiIsInR5cCIgOiAiSldUIiwia2lkIiA6ICJ2MmFQNDdIQXVTUi1qWmR5U3otNDVDV2RaOFhiWGFBMXNDbWhLbWtJLXRvIn0.eyJleHAiOjE2NDM4MDk1NjYsImlhdCI6MTY0MzcyMzE2NiwianRpIjoiOTVmMmViOTgtNzFmNi00MmFjLWJhODQtNjg0M2IxNjg4OWQyIiwiaXNzIjoiaHR0cHM6Ly9zYW5kYm94Lm5lb25vbWljcy5pby9hdXRoL3JlYWxtcy9zYW5kYm94Iiwic3ViIjoiZmQ5MDRiMTctM2Y4Ni00NDFhLTkwODEtNmI0MmVhNDU5NjQ5IiwidHlwIjoiQmVhcmVyIiwiYXpwIjoiZjM5YWM5NWYtZjliOC00Y2FkLTkyOWItOTMwMTM2YTc5ZWM0Iiwic2Vzc2lvbl9zdGF0ZSI6IjAyOWU1MDVkLTU4OTMtNGIxMS04MjljLWEzMGY1ZGEyNTM1YSIsImFjciI6IjEiLCJzY29wZSI6Im9wZW5pZCBiYW5xYnJpZGdlX2NsaWVudCIsIm9yZ2FuaXphdGlvbklkIjoiNjY3Y2YyM2ItNDMzOC00OGVhLWIyMjUtMThjOTlkYzJkNjY2IiwiY2xpZW50SWQiOiJmMzlhYzk1Zi1mOWI4LTRjYWQtOTI5Yi05MzAxMzZhNzllYzQiLCJjbGllbnRIb3N0IjoiNTQuODYuNTAuMTM5IiwiY2tpZCI6IjdlYmI5MGE5LTdlNTctNDA0MS05MTc4LWU5YjA3MmQ1MTZiOSIsImNsaWVudEFkZHJlc3MiOiI1NC44Ni41MC4xMzkifQ.DyqqF7geCsKXArdFNe09VlKEQXjXGEMGcp3Oo-rk11QTxVDm8qgiidkHmWWp1Why3oMrHFIXB1Hv64poV4X3MO8zIAUWEk75zUuh9iOjGtlsoDdxfj7NJuoQGPMg2naCF9aLpuVsaz4zu53n9a9Y6kWbQdVA_lr_RIu1ha9emW9SNctPKhlRU_WjNFVOC3boeyCzOBnsBJyhdLvz-SSUHmCVxX6GzLkd95yc_ir-G_ufoJop9FK7r0idGec77J4iUdVLomlGMRNuj12xVtjoJizpwAZ3_hkQGp391cNMLjbApolFuQdDYnQMQ9yLB6_iVjyOJ-bghlSgiTUgA7uUSQ';
        $data = Neonomics::getBankByID($token, $id);
        return $this->responseJson($data);
    }
}
