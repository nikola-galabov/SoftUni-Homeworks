using System;

class PointInCircOutRect
{
    static void Main()
    {
        Console.Write("Please enter x: ");
        double x = double.Parse(Console.ReadLine());
        Console.Write("Please enter y: ");
        double y = double.Parse(Console.ReadLine());
        bool insideCirc = false;
        bool inKOutR = false;
        double distance = Math.Sqrt(Math.Pow((x-1),2)+Math.Pow((y-1),2));
        if (distance<=1.5)
        {
            insideCirc = true;
        }
        if (insideCirc==true&&y>1)
        {
            inKOutR = true;
        }
        Console.WriteLine("The point is inside the cirle and outside the rectangle: {0}",inKOutR);
    }
}

