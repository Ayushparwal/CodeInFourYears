#include<stdio.h>
int linear(int arr[],int n,int element){
    for(int i=0;i<n;i++){
        if(arr[i]==element){
            return i;
        }
    }
    return -1;

}
int main(){
    int arr[]={15,57,12,51,12,31,4,2};
    int element=51;
    int size=sizeof(arr)/sizeof(int);
    int value= linear(arr,size,element);
    printf("the element %d was at index %d",element,value);
}