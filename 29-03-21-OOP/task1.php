<?php
//Используем класс Car c видео урока
////1) Добавить классу 3 свойства на свое усмотрение (например: количество дверей, стоимость, ...). Одному из свойств присвоить значение по умолчанию.
    class Auto
    {
        public $brand = 'Toyota';
        public $maxspeed;
        public $fuelConsmp;
        public  $price;

        const CONST1 = 2;
        const CONST2 = 50;
        const CONST3 = 12;

        public function __construct(string $brand, int $maxspeed, int $fuelConsmp, int $price)
        {
            $this->brand = $brand;
            $this->maxspeed = $maxspeed;
            $this->fuelConsmp = $fuelConsmp;
            $this->price = $price;
    }
    //5) Написать функцию fuelСonsumption() для расчета количества топлива, затраченного на поездку на заданную дистанцию. Используйте свойство объекта $fuel (расход топлива на 100 км). Задача похожа на пример из занятия.
        public function fuelConsumption($distance){
            $neededFuel = $distance * $this -> fuelConsmp / 100;
            echo "На расстояние " .$distance . " км для авто " . $this -> brand . " необходимо столько литров топлива: ". $neededFuel;
        }

        public static function getMaxConstant(){
                return max(self::CONST1, self::CONST2, self::CONST3);
        }
    }
//2) Создать 4 объекта класса Car.
//3) Для двух объектов задать значения свойств, используя обращение к свойству (например,$car1>price).
//        $car1 = new Auto;
//        $car1 -> brand = 'Mazda';
//        $car1 -> maxspeed = 250;
//        $car1 -> fuelConsmp = 18;
//        $car1 -> price = 30000;
//
//        $car2 = new Auto;
//        $car2 -> maxspeed = 350;
//        $car2 -> fuelConsmp = 20;
//        $car2 -> price = 50000;
//

//4) Для двух оставшихся задать свойства используя конструктор (написать констуктор для инициализации объекта).
// (!АКТИВНЫ МОГУТ БЫТЬ ЛИБО ПЕРВЫЕ ДВЕ ПЕРЕМЕННЫЕ, ЛИБО ВТОРЫЕ ДВЕ)
        $car3 = new Auto('Audi', 450, 25, 100000);
        $car4 = new Auto('Toyota', 200, 15,3000);

        echo "Задача 5 <br>";
        echo $car3 -> fuelConsumption(1000)."<br> <hr>";

//6) Добавить в класс 3 числовых константы (со значениями, например, 2,5,12). Распечатать значения констант в коде программы (вне класса).
        echo "Задача 6. <br>";
        echo Auto::CONST1."<br>";
        echo Auto::CONST2."<br>";
        echo Auto::CONST3."<br> <hr>";

//7) Добавить статический метод getMaxConstant(). Этот метод находит наибольшую из констант класса и возвращает её значение. Не забывайте, что статические методы принадлежат классу, и вызываются из контекста класса.
        echo "Задача 7. </br>";
        echo Auto::getMaxConstant();
