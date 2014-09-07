using System;

class PrintNumbers
{
    static void Main()
    {
        int number = 1;
        for (int i = 0; i < 1000; i++)
        {
            Console.WriteLine(number);
            number++;
        }
    }
}

