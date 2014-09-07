using System;

class OddOrEvenIntegers
{
    static void Main()
    {
        Console.Write("Please enter a number: ");
        int num = int.Parse(Console.ReadLine());
        if (num%2==0)
        {
            Console.WriteLine("The number is: even");
        }
        else
        {
            Console.WriteLine("The number is: odd");
        }
    }
}

