using System;

class BitsExchange
{
    static void Main()
    {

        Console.Write("n= ");
        long n = uint.Parse(Console.ReadLine());
        Console.Write("p= ");
        int p = int.Parse(Console.ReadLine());
        Console.Write("q= ");
        int q = int.Parse(Console.ReadLine());
        Console.Write("k= ");
        int k = int.Parse(Console.ReadLine());

        if (Math.Max(p, q) + k > 32)
        {
            Console.WriteLine("Out of range!");
        }

        else if (Math.Min(p, q) + k > Math.Max(p, q))
        {
            Console.WriteLine("overlapping");
        }

        else
        {
            for (int i = 0; i < k; i++)
            {
                int workMask = 1;
                long mask1 = n & (1 << p + i);
                long mask2 = n & (1 << q + i);
                mask1 >>= p + i;
                mask2 >>= q + i;

                if (mask1 != mask2)
                {
                    if (mask1 == 1)
                    {
                        mask1 <<= q + i;
                        workMask <<= p + i;
                        n = n | mask1;
                        n = n & (~workMask);
                    }

                    else
                    {
                        workMask <<= q + i;
                        mask2 <<= p + i;
                        n = n & (~workMask);
                        n = n | mask2;
                    }
                }
            }

            Console.WriteLine(n);
        }
    }
}


