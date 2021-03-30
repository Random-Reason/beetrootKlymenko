<?php
//1) Создать класс Figure - плоская геометрическая фигура. У этого класса есть такие свойства: площадь, цвет. И константа: количество сторон.
    class Figure
    {
        public $area;
        public $color;


//2) Для класса Figure написать метод infoAbout(). Этот метод возвращает сообщение: "Это геометрическая фигура!".
        public function infoAbout()
        {
            echo "Это геометрическая фигура!";
        }
    }

//3) От класса Figure унаследовать классы: Rectangle, Triangle, Square.
////4) Добавить для Rectangle приватные свойства a,b - длины сторон.
    class Rectangle extends Figure {
        private $a;
        private $b;

        const SIDES = 4;

        public function __construct (int $a, int $b) {
            $this -> a = $a;
            $this -> b = $b;
        }

        final public function infoAbout()
        {
            echo "Эта геометрическая фигура прямоугольник и у него ".self::SIDES. " стороны.<br>";
        }
        public function getPerimeter() {
            $perimeter = ($this->a + $this->b) * 2;
            echo "Его периметр равен ".$perimeter ."<br><hr>";
        }
    }
//5) Добавить для Square приватное свойство a - длина стороны.
    class Square extends Figure {
        private $a;

        const SIDES = 4;

        public function __construct (int $a) {
             $this -> a = $a;
        }
        public function getPerimeter() {
        $perimeter = $this->a *4;
        echo "Его периметр равен ".$perimeter."<br><hr>";
        }
        final public function infoAbout()
        {
            echo "Эта геометрическая фигура квадрат и у него ".self::SIDES. " стороны. <br>";
        }

    }
//6) Добавить для Triangle приватные свойства a, b, c - длины сторон.
//7) Для каждого из классов Rectangle, Triangle, Square определить значение константы: количество сторон.Например, для квадрата: const SIDES_COUNT = 4;
//8) Создать конструкторы для классов Rectangle, Triangle, Square для инициализации значений длин сторон.(Подсказка: принцип такой же, как и в предыдущем занятии – ООП #1).

class Triangle extends Figure {
        private $a;
        private $b;
        private $c;

        const SIDES = 3;
        public function __construct (int $a, int $b, int $c) {
            $this -> a = $a;
            $this -> b = $b;
            $this -> c = $c;

        }
        public function getPerimeter() {
            $perimeter = $this->a + $this->b + $this->c;
            echo "Его периметр равен ".$perimeter."<br><hr>";
        }
        final public function infoAbout()
        {
            echo "Эта геометрическая фигура треугольник и у него ".self::SIDES. " стороны. <br>";;
        }

    }
    $rectangle1 = new Rectangle(10, 20);
    $rectangle1 -> infoAbout();
    $rectangle1 ->getPerimeter();

    $rectangle2 = new Rectangle(12, 15);
    $rectangle2 -> infoAbout();
    $rectangle2 ->getPerimeter();

    $square1 = new Square(8);
    $square1 -> infoAbout();
    $square1 -> getPerimeter();

    $square2 = new Square(13);
    $square2 -> infoAbout();
    $square2 -> getPerimeter();

    $triangle1 = new Triangle(12, 6, 23);
    $triangle1 -> infoAbout();
    $triangle1 -> getPerimeter();

    $triangle2 = new Triangle(10, 6, 12);
    $triangle2 -> infoAbout();
    $triangle2 -> getPerimeter();

//9) Для каждого из классов Rectangle, Triangle, Square реализовать метод getArea() - подсчет площади. Методы возвращают значение площади. Подсказки ниже.
//10) Для каждого из классов Rectangle, Triangle, Square переопределить метод infoAbout() так, что б он возвращал строку такого содержания: (пример для квадрата):"Это класс квадрата. У него 4 стороны". Аналогично для других классов. Подсказка: использовать константу класса для вывода количество сторон.
//11) Сделать методы infoAbout() финальными.
//12) Для каждого класса Rectangle, Triangle, Square создать по 2 объекта (с передачей значений длин сторон в конструктор).
//13) Вызвать для всех объектов методы getArea(), вывести результаты.