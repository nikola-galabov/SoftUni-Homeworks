using System;

class Program
{
    static void Main(string[] args)
    {
        double a = double.Parse(Console.ReadLine());
        double b = double.Parse(Console.ReadLine());
        double c = double.Parse(Console.ReadLine());
        double first = a;
        double second=b;
        double third = c;
        if (a>b&&a>c)
        {
            first = a;
            if (b>c)
            {
                second = b;
                third = c;
            }
            else
            {
                second = c;
                third = b;
            }
        }
        if (b>a&&b>c)
        {
            first = b;
            if (a>c)
            {
                second = a;
                third = c;
            }
            else
            {
                second = c;
                third = a;
            }
        }
        else if (c>a&&c>b)
        {
            first = c;
            if (a>b)
            {
                second = a;
                third = b;
            }
            else
            {
                second = b;
                third = a;
            }
        }

        Console.WriteLine("{0}, {1}, {2}",first,second,third);
    }
}

