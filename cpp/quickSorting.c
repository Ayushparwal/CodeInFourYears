#include <stdio.h>

int partition(int a[], int l, int h){
    int i=l+1, j=h, temp;
    int pivot = a[l];
    do{
        do{i++;}
        while(a[i]<=pivot);

        do{j--;}
        while(a[j]>pivot);

        if(i<j){
            temp = a[i];
            a[i] = a[j];
            a[j] = temp;
        }
    }while(i<j);
    temp = a[l];
    a[l] = a[j];
    a[j] = temp;
    return j;
}
void quickSort(int a[], int l, int h){
    int j;
    if(l<h){
        j = partition(a, l, h);
        quickSort(a, l, j-1);
        quickSort(a, j+1, h);
    }
}
int main(){
    int a[] = {5,183,74,19,2,1,87,35};
   int n=9;
    quickSort(a, 0, n-1);
    for(int i=0;i<9;i++){
        printf("%d ", a[i]);
    }
}