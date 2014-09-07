using System;

class PointInCircle
{
    static void Main()
    {
        Console.Write("Please enter x: ");
        double x = double.Parse(Console.ReadLine());
        Console.Write("Please enter y: ");
        double y = double.Parse(Console.ReadLine());
        bool inside = false;
        double distance = Math.Sqrt(Math.Pow((x - 0), 2) + Math.Pow((y - 0), 2));
        if (distance <= 2)
        {
            inside = true;
        }
        Console.WriteLine("The point is inside the circle: {0}", inside);
    }
}

