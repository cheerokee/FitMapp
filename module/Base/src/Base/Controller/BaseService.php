<?php
namespace Base\Controller;

use Doctrine\ORM\EntityManager;
use Zend\Http\Request;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\Paginator\Adapter\ArrayAdapter;
use Zend\Paginator\Paginator;

class BaseService extends AbstractActionController
{
    public function __construct(){}

    public function listAction($list) {

        $page = $this->params()->fromRoute('page',0);
        $page = ($page) ? $page : 1;

        $limit = $this->params()->fromRoute('limit',0);
        $limit = ($limit) ? $limit : 25;

        $por_pagina = $limit;
        $total_paginas = (count($list) > 0) ? ceil(count($list) / $por_pagina) : 1;

        if(!empty($list))
            foreach($list as $k => $item){}

        $paginate = new Paginator(new ArrayAdapter($list));
        $paginate->setCurrentPageNumber($page)->setDefaultItemCountPerPage($por_pagina);

        $return = array(
            '_embedded' => [],
            'page' => $page,
            'page_count' => $total_paginas,
            'page_size' => $por_pagina,
            'total_items' => 0
        );
        $count = 0;

        foreach($paginate as $objeto){
            $return['_embedded']['entity'][] = $objeto;
            $count++;
        }

        $return['total_items'] = $count;

        return $return;
    }
}
