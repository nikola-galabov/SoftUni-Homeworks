using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace _12_ZeroSubset
{
    class Program
    {
        static void Main()
        {
            string pattern;
            int[] a = new int[5];

            string[] values = Console.ReadLine().Split(new char[] { ' ', '\t' }, StringSplitOptions.RemoveEmptyEntries);
            for (int i = 0; i < a.Length; i++)
            {
                a[i] = int.Parse(values[i]);
            }

            int zerosCount = 0, currentSum;
            List<int> numbers;
            for (int i = 1, m = (int)Math.Pow(2, a.Length); i < m; i++)
            {
                pattern = Convert.ToString(i, 2).PadLeft(a.Length, '0');
                currentSum = 0;
                numbers = new List<int>();
                for (int j = 0; j < a.Length; j++)
                {
                    if (pattern[j] == '1')
                    {
                        currentSum += a[j];
                        numbers.Add(a[j]);
                    }
                }
                if (currentSum == 0)
                {
                    zerosCount++;
                    if (numbers.Count > 1)
                    {
                        for (int j = 0; j < numbers.Count - 1; j++)
                        {
                            Console.Write("{0} + ", numbers[j]);
                        }
                        Console.WriteLine("{0} = 0", numbers[numbers.Count - 1]);
                    }
                    else
                    {
                        Console.WriteLine("{0} = 0", numbers[0]);
                    }
                }
            }
            if (zerosCount > 0)
            {
                Console.WriteLine("Total: {0} subset(s), whose sum is 0", zerosCount);
            }
            else
            {
                Console.WriteLine("no zero subset");
            }
        }
    }
}
