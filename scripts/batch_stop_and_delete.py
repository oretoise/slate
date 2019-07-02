import pyautogui

pyautogui.PAUSE = 5

while True:
    # Click first email in list.
    pyautogui.click(640, 350)

    # Stop it
    pyautogui.click(1760, 430)
    pyautogui.click(980, 1030)
    pyautogui.typewrite("STOP")
    pyautogui.press('enter')

    # Delete it
    pyautogui.click(1925, 250)
    pyautogui.click(1060, 970)
    pyautogui.press('enter')