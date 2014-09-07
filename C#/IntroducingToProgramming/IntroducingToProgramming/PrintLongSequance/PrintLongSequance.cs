using System;

class PrintLongSequance
{
    static void Main()
    {
        int firstPositiveNumber = 2;
        int positiveDifference = 2;
        int firstNegative = -3;
        int negativeDifference = -2;
        Console.Write(firstPositiveNumber + " ");
        Console.Write(firstNegative + " ");
        for (int i = 0; i < 499; i++)
        {
            int newPositive = firstPositiveNumber + positiveDifference;
            int newNegative = firstNegative + negativeDifference;
            if (Console.CursorLeft>=(Console.BufferWidth-3))
            {
                Console.WriteLine(); 
            }
            Console.Write(newPositive + " ");
            if (Console.CursorLeft >= (Console.BufferWidth - 3))
            {
                Console.WriteLine();
            }
            Console.Write(newNegative + " ");
            firstNegative = newNegative;
            firstPositiveNumber = newPositive;
        }
    }
}

