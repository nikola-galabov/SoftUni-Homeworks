using System;

class CirclePerimAndArea
{
    static void Main()
    {
        Console.Write("r = ");
        double r = double.Parse(Console.ReadLine());
        double perim = 2 * Math.PI*r;
        double area = Math.PI * r * r;
        Console.WriteLine("The perimeter of the circle is: {1:f2}\nThe are of the circle is: {0:f2}",area, perim);
    }
}

