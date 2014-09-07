using System;

class ChrckThirdDigitOfNumber
{
    static void Main()
    {
        Console.Write("Please enter a number: ");
        int num = int.Parse(Console.ReadLine());
        byte result =(byte) ((num / 100) % 10);
        bool digitCheck = false;
        if (result==7)
        {
            digitCheck = true;
        }
        Console.WriteLine("The digit is 7? {0}",digitCheck);
    }
}

