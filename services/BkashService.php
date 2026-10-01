<?php
final class BkashService {
    public function __construct(
        private string $baseUrl, private string $username, private string $password,
        private string $appKey, private string $appSecret,
    ) {}
    public function grantToken(): array {
        return $this->post('/checkout/token/grant',
            ['app_key'=>$this->appKey,'app_secret'=>$this->appSecret],
            ['username'=>$this->username,'password'=>$this->password]);
    }
    public function createPayment(string $token, array $payload): array {
        return $this->post('/checkout/payment/create',$payload,
            ['Authorization'=>$token,'X-APP-Key'=>$this->appKey]);
    }
    private function post(string $path,array $body,array $headers=[]): array {
        $ch=curl_init(rtrim($this->baseUrl,'/').$path);
        $h=['Content-Type: application/json'];
        foreach($headers as $k=>$v) $h[]=$k.': '.$v;
        curl_setopt_array($ch,[CURLOPT_POST=>true,CURLOPT_RETURNTRANSFER=>true,CURLOPT_TIMEOUT=>30,
          CURLOPT_HTTPHEADER=>$h,CURLOPT_POSTFIELDS=>json_encode($body)]);
        $out=curl_exec($ch);
        if($out===false) throw new RuntimeException(curl_error($ch));
        $code=curl_getinfo($ch,CURLINFO_HTTP_CODE); curl_close($ch);
        if($code<200||$code>=300) throw new RuntimeException('bKash API HTTP '.$code);
        return json_decode($out,true) ?? [];
    }
}
