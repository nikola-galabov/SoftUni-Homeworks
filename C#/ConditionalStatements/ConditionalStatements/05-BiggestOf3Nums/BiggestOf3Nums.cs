using System;

class BiggestOf3Nums
{
    static void Main()
    {
        double a = double.Parse(Console.ReadLine());
        double b = double.Parse(Console.ReadLine());
        double c = double.Parse(Console.ReadLine());

        double biggest = a;
        if (a<b&&b>c)
        {
            biggest = b;
        }
        else if (a<c&&c>b)
        {
            biggest = c;
        }
        Console.WriteLine("The biggest number is: "+biggest);
    }
}

