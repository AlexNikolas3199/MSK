<?php
function get_products() {
  return [
    '1' => [
      'title' => 'о компании',
      'url' => 'images/2871966.jpg',
    ],

    '2' => [
      'title' => 'Лицензии',
      'url' => 'images/2871936.jpg',
    ],

    '3' => [
      'title' => 'Рекомендательные письма',
      'url' => 'images/7309.jpg',
    ],

    '4' => [
      'title' => 'Партнеры',
      'url' => 'images/2642690.jpg',
    ],

    '5' => [
      'title' => 'Социальная ответственность',
      'url' => 'images/2871956.jpg',
    ],

    '6' => [
      'title' => 'Новости',
      'url' => 'images/news_mobile.jpg',
    ],

    '7' => [
      'title' => 'Проекты',
      'url' => 'images/contacts_page_bckg1.jpg',
    ],

    '8' => [
      'title' => 'Услуги',
      'url' => 'images/services_mobile.jpg',
    ],

    '9' => [
      'title' => 'Капитальное строительство',
      'url' => 'images/capital_construction.jpg',
    ],

    '10' => [
      'title' => 'Реконструкции и кап.ремонт зданий',
      'url' => 'images/okno_1.jpg',
    ],

    '11' => [
      'title' => 'Проектирование',
      'url' => 'images/projection.jpg',
    ],

    '12' => [
      'title' => 'Осуществление функций тех. заказчика',
      'url' => 'images/technical_functions.jpg',
    ],

    '13' => [
      'title' => 'Благоустройство',
      'url' => 'images/beautification.jpg',
    ],

    '14' => [
      'title' => 'Контакты',
      'url' => 'images/contacts_page_bckg.jpg',
    ],

    '15' => [
      'title' => 'Зарубежное строительство',
      'url' => 'images/okno_1.jpg',
    ],

    '16' => [
      'title' => 'Капитальное строительство',
      'url' => 'images/okno_2.jpg',
    ],

    '17' => [
      'title' => 'Социальные объекты',
      'url' => 'images/okno_3.jpg',
    ],

    '18' => [
      'title' => 'Карта объектов',
      'url' => 'images/okno_4.jpg',
    ],

    '19' => [
      'title' => 'Кресло Бадета',
      'url' => 'img/item-badeta.jpg',
    ],

    '20' => [
      'title' => 'Сувенир Рмоб',
      'url' => 'img/item-rmob.jpg',
    ],

    '21' => [
      'title' => 'Люстра Ткуоко',
      'url' => 'img/item-tkuoko.jpg',
    ],

    '22' => [
      'title' => 'Кресла Бриатуо',
      'url' => 'img/item-briatuo.jpg',
    ]
  ];
}

function get_product_attribute($id, $attr) {
  $products = get_products();
  $result = $products[$id][$attr] ?? null;
  return $result;
}

function get_product_title($id) {
  return get_product_attribute($id, 'title');
}

function get_img_url($id) {
  return get_product_attribute($id, 'url');
}