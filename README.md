
# Гаврилов Артем [![Build Status](https://travis-ci.org/OrdinarySkalen/laravelTeastApp.svg?branch=master)](https://travis-ci.org/OrdinarySkalen/laravelTeastApp)

### Описание приложения
Данное приложение случайным образом раскидывает по корзинам шары с номерами от 1 до 999. 
По-умолчанию в некотором пространстве располагается 1 пользовательская корзина, вмещающая 100 шаров, 
и 30 прочих корзин, максимальной вместимостью 10 шаров. Далее происходит заполнение корзин. 
Производится поиск среди корзин по двум критериям:
  * Корзины, все нумерованные шары в которых совпадают с шарами в пользовательской корзине;
  * Корзины, в которых лишь один нумерованный шар совпадает с содержимым пользовательской корзины.

Так же в приложении реализована возможность варьировать вместимость пользовательской корзины и 
число прочих корзин.
   
### Инструкция по запуску
Для запуска приложения требуется с клонировать приложение на сервер, так же должны наличествовать папка 
vendor и файл окружения .env (я не решился закидывать в репозиторий дополнительно еще около 6000 
файлов...).


