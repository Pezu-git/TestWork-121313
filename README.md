

## Mello test

Проект развернут на [Heroku](https://rocky-castle-11672.herokuapp.com/);


#Реализация:
Проект содержит базу данных из двух таблиц(categories, products) со связью многие ко многим. 
В таблице categories содержаться категории товаров, в частности обуви, такие как : "Асфальт", "LifeStyle", "Трейл", "С мембраной", "Без мембраны". Содержит столбцы 'id', 'name', 'description'

В таблице products содержаться товары(кроссовки), такие как : 'Asics Fuji Trabuko', 'Asics', 'Mizuno Wave Rider 24', 'Hoka Torrent 2', 'Suacony Mad River', 'Nike Pegasus Trail GTX', 'Under Armour', 'New Balance 574'. Содержит столбцы 'id', 'name', price', 'description'.


- api/product - возвращает все строки из таблицы products

- api/product/{id} - возвращает список категорий, к которым привязан данный товар(где {id} - id продукта, целое число от 1 до 8);

- api/product/sortByCat - возвращает отсортированный по выбранным категориям список (при тестировании на Postman данные вводить в поле form-data в формате: KEY => name[0], VALUE => 1, где "1" - id выбранной категории);

- api/product/sortByPrice - возвращает отсортированный по выбранному диапозону цен список (при тестировании на Postman данные вводить в поле form-data в формате: KEY => price[min], VALUE => 4000; KEY => price[max], VALUE => 10000. Диапазон цен 4000 - 14000);

- api/category - возвращает все строки из таблицы categories

- /category/{id} - возвращает список товаров, входящих в данную категорию(где {id} - id категории, целое число от 1 до 5);

- api/user - данный Route входит в защищенную middleware-группу. Для просмотра ссылки необходимо добавить к адресу Token запроса(либо передать его в заголовке Authorization: Bearer <token>).Значение token'a {hFgh4k:Lk533fgdkj64657}. Запрос быдет выглядеть так api/user?token=hFgh4k:Lk533fgdkj64657

