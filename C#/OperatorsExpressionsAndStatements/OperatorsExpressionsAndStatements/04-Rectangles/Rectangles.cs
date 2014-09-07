using System;

class Rectangles
{
    static void Main()
    {
        Console.Write("Please enter the width: ");
        double width = double.Parse(Console.ReadLine());
        Console.Write("Please enter the height: ");
        double height = double.Parse(Console.ReadLine());
        double perimeter = 2 * width + 2 * height;
        double area = width * height;
        Console.WriteLine("The perimeter of the rectangle is: {0}.",perimeter);
        Console.WriteLine("The area of the rectangle is: {0}.", area);
    }
}

