using System;

class BiggestOfFiveNums
{
    static void Main()
    {
        double a = double.Parse(Console.ReadLine());
        double b = double.Parse(Console.ReadLine());
        double c = double.Parse(Console.ReadLine());
        double d = double.Parse(Console.ReadLine());
        double e = double.Parse(Console.ReadLine());

        double maxValue = a;
        if (a<b&&b>c&&b>d&&b>e)
        {
            maxValue = b;
        }

        else if (a<c && c>b && c>d&&c>e)
        {
            maxValue = c;
        }
        else if (a<d&&d>b&&d>c&&d>e)
        {
            maxValue = d;
        }
        else if (a<e&&e>b&&e>c&&e>d)
        {
            maxValue = e;
        }
        Console.WriteLine(maxValue);
    }
}

