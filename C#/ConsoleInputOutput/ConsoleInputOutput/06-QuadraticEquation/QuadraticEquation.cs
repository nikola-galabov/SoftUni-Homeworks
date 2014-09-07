using System;

class QuadraticEquation
{
    static void Main()
    {
        Console.Write("a = ");   
        double a = double.Parse(Console.ReadLine());
        Console.Write("b = ");
        double b = double.Parse(Console.ReadLine());
        Console.Write("c = ");
        double c = double.Parse(Console.ReadLine());
        double d = Math.Pow(b,2) - (4 * a * c);
        double x1 = 0;
        double x2 = 0;
        if (d>0)
        {
            x1 = (-b + Math.Sqrt(d))/(2*a);
            x2 = (-b - Math.Sqrt(d))/(2*a);
            Console.WriteLine("X1 = {0}; X2 = {1}",x2,x1);
        }
        else if (d==0)
        {
            x1 = (-b + Math.Sqrt(d))/(2*a);
            Console.WriteLine("X1 = X2 = {0}", x1);
        }
        else if (d<0)
        {
            Console.WriteLine("no real roots");
        }
    }
}

