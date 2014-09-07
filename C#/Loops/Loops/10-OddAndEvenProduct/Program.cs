using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace _10_OddAndEvenProduct
{
    class Program
    {
        static void Main(string[] args)
        {
            string input = Console.ReadLine();
            string[] digits = input.Split(' ');
            int oddProduct = 1;
            int evenProduct = 1;
            for (int i = 0; i < digits.Length; i++)
            {
                if (i%2==0)
                {
                    oddProduct *= int.Parse(digits[i]);
                }
                else
                {
                    evenProduct *= int.Parse(digits[i]);
                }
                
            }
            if (evenProduct==oddProduct)
            {
                Console.WriteLine("yes\nproduct = {0}", evenProduct);
            }
            else
            {
                Console.WriteLine("no\neven product = {0}\nodd product = {1}",evenProduct,oddProduct);
            }
        }
    }
}
