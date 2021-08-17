<?php
class DecentralizationMiddleware extends Decentralization {
    public function handle($url){
        $response = new Response();
        global $config;
        $arrUrl = explode("/", $url);
        if (count($arrUrl) == 4) {
            array_pop($arrUrl);
        }
        $url = implode("/", $arrUrl);
        
        if(!empty($config['decentralization'])) {
            $decentralization = $config['decentralization'];
            if (!empty(View::$dataShare)){
                foreach($decentralization[0] as $urlForAll) {
                    if ($url == $urlForAll) {
                        return true;
                    }
                }

                unset($decentralization[0]);

                $adminHasPermissions = View::$dataShare['AdminHasPermissions'];
                foreach ($decentralization as $key => $access) {
                    foreach($adminHasPermissions as $permission) {
                        if ($permission['permission_id'] == $key) {
                            foreach($access as $urlAccess) {
                                if ($url == $urlAccess) {
                                    return true;
                                }
                            }
                        }
                    }
                }
            }
        }
        // exit($response->redirect('dashboard')); 
        // Khi sử dụng middleware này trang web tải cả trang bình thường lẫn dashboard
        // dẫn đến gây sai _token
        // vẫn chưa tìm ra nguyên Nhân
        return false;
    }
}