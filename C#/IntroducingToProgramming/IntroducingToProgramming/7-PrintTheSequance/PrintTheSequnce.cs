using System;

class PrintTheSequance
{
    static void Main()
    {
        int firstPositiveNumber = 2;
        int positiveDifference = 2;
        int firstNegative = -3;
        int negativeDifference = -2;
        Console.Write(firstPositiveNumber + " ");
        Console.Write(firstNegative + " ");
        for (int i = 0; i < 4; i++)
        {
            int newPositive = firstPositiveNumber + positiveDifference;
            int newNegative = firstNegative + negativeDifference;
            Console.Write(newPositive + " ");
            Console.Write(newNegative + " ");
            firstNegative = newNegative;
            firstPositiveNumber = newPositive;
        }
    }
}


