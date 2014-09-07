using System;

class PrintTheAscTable
{
    static void Main()
    {
        //Console.OutputEncoding = System.Text.UTF7Encoding.ASCII;
        for (int i = 0; i < 255; i++)
        {
            char asciiSymbol = (char) i;
            Console.Write(asciiSymbol);
            Console.Write(" ");
        }
    }
}

