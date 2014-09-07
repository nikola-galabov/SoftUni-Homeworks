using System;

class PrimeNumberCheck
{
    static void Main()
    {
        Console.Write("Please enter a number: ");
        int num = int.Parse(Console.ReadLine());
        bool isPrime = true;
        if (num<2)
        {
            isPrime = false;
        }
        int minDiv = 2;
        int maxDiv = (int) Math.Sqrt(num);
        while (minDiv<=maxDiv)
        {
            if (num%minDiv!=0)
            {
                isPrime = false;
                break;
            }
            minDiv++;
        }

        Console.WriteLine("Prime? "+isPrime);
    }
}

