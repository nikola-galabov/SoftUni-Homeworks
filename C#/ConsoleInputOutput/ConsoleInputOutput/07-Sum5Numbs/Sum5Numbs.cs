using System;

class Sum5Numbs
{
    static void Main()
    {
        string numbs = Console.ReadLine();
        string[] newString = numbs.Split(' ');
        double[] numbers = new double[5];      
        double sum = 0;
        for (int i = 0; i < numbers.Length; i++)
        {
            numbers[i] = double.Parse(newString[i].ToString());           
            sum += numbers[i];
        }

        Console.WriteLine(sum);
    }

}

