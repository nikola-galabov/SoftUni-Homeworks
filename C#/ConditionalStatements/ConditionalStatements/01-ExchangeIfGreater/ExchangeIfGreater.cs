using System;

class ExchangeIfGreater
{
    static void Main()
    {
        double a = double.Parse(Console.ReadLine());
        double b = double.Parse(Console.ReadLine());

        if (b<a)
        {
            double temp = b;
            b = a;
            a = temp;
        }
        Console.WriteLine(a);
        Console.WriteLine(b);
    }
}

