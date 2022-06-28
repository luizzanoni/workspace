namespace colecoes.helper
{
    public class OperacoesArray
    {
        public void ordenarBubbleSort(ref int [] array)
        {
            int temp = 0;

            for (int i = 0; i < array.length; i++)
            {
                for (int j = 0; j < array.length - 1; j++)
                {
                    if (array[j] > array[j + 1])
                    {
                        temp = array[j + 1];
                        array[j + 1] = array[j];
                        array[j] = temp;
                    }
                }
            }
        }
        public void imprimirArray(int [] array)
        {
            for (int i = 0; i < array.length; i++)
            {
                System.Console.WriteLine(array[i]);
            }
        }
    }
}